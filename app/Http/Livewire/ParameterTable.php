<?php

namespace App\Http\Livewire;

use App\Exports\ParametersExport;
use App\Models\BiaProcess;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Parameter;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class ParameterTable extends DataTableComponent
{
    protected $model = Parameter::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setHideBulkActionsWhenEmptyEnabled();
        $this->setFilterLayout('slide-down');
    }

    public function columns(): array
    {
        $usuario = Auth::user();
        $puede_editar = $usuario->hasPermissionTo('admin.parameters.edit');

        $columnas = [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("BIA", "bia.name")
                ->sortable(),
            Column::make("Fecha de creación", "created_at")
                ->format(function ($value) {
                    return Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d/m/Y');
                }),
            Column::make("Fecha de actualización", "updated_at")
                ->format(function ($value) {
                    return Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d/m/Y');
                })
                ->deselected(),
            BooleanColumn::make("Estado", "status")
                ->sortable(),
        ];

        if ($puede_editar) {
            $columnas = array_merge(
                $columnas,
                [
                    LinkColumn::make('Acciones')
                        ->title(fn ($row) => 'Editar')
                        ->location(fn ($row) => route('parameters.edit', $row->id))
                        ->attributes(function ($row) {
                            return ['class' => 'btn btn-success'];
                        })
                ]
            );
        }

        return $columnas;
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('BIA')
                ->options(
                    array_merge(['' => 'Todos'], BiaProcess::query()
                        ->orderBy('id', 'desc')
                        ->where('status', true)
                        ->get('name')
                        ->keyBy('name')
                        ->map(fn ($bia) => $bia->name)
                        ->toArray())
                )
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('bia_processes.name', $value);
                }),
        ];
    }

    public function bulkActions(): array
    {
        return [
            'exportPDF' => 'exportar PDF',
            'exportExcel' => 'exportar EXCEL'
        ];
    }

    public function exportPDF()
    {
        $parametros = Parameter::with('bia:id,name')->findMany($this->getSelected());
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->toTimeString();
        $pdf = Pdf::loadView('pdf.parameters', compact('nombreCompleto', 'fecha', 'hora', 'parametros'))->output();
        return response()->streamDownload(
            fn () => print($pdf),
            $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo BIA.pdf'
        );
    }

    public function exportExcel()
    {
        $parametros = $this->getSelected();
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        return Excel::download(new ParametersExport($parametros), $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Parámetros.xlsx');
    }
}
