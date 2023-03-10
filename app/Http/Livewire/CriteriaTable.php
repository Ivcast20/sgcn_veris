<?php

namespace App\Http\Livewire;

use App\Exports\CriteriasExport;
use App\Models\BiaProcess;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Criteria;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class CriteriaTable extends DataTableComponent
{
    protected $model = Criteria::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setHideBulkActionsWhenEmptyEnabled();
        $this->setFilterLayout('slide-down');
    }

    public function columns(): array
    {
        $usuario = Auth::user();
        $puede_editar = $usuario->hasPermissionTo('admin.criterias.edit');

        $columnas = [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("BIA", "bia.name")
                ->sortable(),
            Column::make("Nivel", "level.name")
                ->sortable()
                ->searchable(),
            Column::make("Parámetro", "parameter.name")
                ->sortable()
                ->searchable(),
            Column::make("Descripción", "description"),
            BooleanColumn::make("Estado", "status")
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
        ];

        if($puede_editar)
        {
            $columnas = array_merge(
                $columnas,
                [
                    LinkColumn::make('Acciones')
                        ->title(fn ($row) => 'Editar')
                        ->location(fn ($row) => route('criterias.edit', $row->id))
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
            SelectFilter::make('Estado', 'status')
                ->options([
                    '' => 'Todos',
                    '1' => 'Activo',
                    '0' => 'Inactivo',
                ])->filter(function (Builder $builder, string $value) {
                    if ($value === '1') {
                        $builder->where('criterias.status', true);
                    } elseif ($value === '0') {
                        $builder->where('criterias.status', false);
                    }
                }),
            SelectFilter::make('BIA')
                ->options(
                    array_merge(['' => 'Todas'], BiaProcess::query()
                        ->orderBy('name')
                        ->get('name')
                        ->keyBy('name')
                        ->map(fn ($categ) => $categ->name)
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
            'exportPDF' => 'Exportar PDF',
            'exportExcel' => 'Exportar EXCEL'
        ];
    }

    public function exportPDF()
    {
        $criterias = Criteria::with(['bia:id,name','level:id,name','parameter:id,name'])->findMany($this->getSelected());
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        $pdf = Pdf::loadView('pdf.criterias', compact('nombreCompleto', 'fecha', 'hora', 'criterias'))->output();
        return response()->streamDownload(
            fn () => print($pdf),
            $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Criterios.pdf'
        );
    }

    public function exportExcel()
    {
        $criterias = $this->getSelected();
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        return Excel::download(new CriteriasExport($criterias), $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Criterios.xlsx');
    }
}
