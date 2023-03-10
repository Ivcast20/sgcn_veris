<?php

namespace App\Http\Livewire;

use App\Exports\LevelsExport;
use App\Models\BiaProcess;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Level;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class LevelTable extends DataTableComponent
{
    protected $model = Level::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setHideBulkActionsWhenEmptyEnabled();
        $this->setFilterLayout('slide-down');
    }

    public function columns(): array
    {
        $usuario = Auth::user();
        $puede_editar = $usuario->hasPermissionTo('admin.levels.edit');

        $columnas =  [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "name")
                ->sortable()
                ->searchable(),
            Column::make("Valor", "value")
                ->sortable(),
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
                        ->location(fn ($row) => route('levels.edit', $row->id))
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
                        $builder->where('levels.status', true);
                    } elseif ($value === '0') {
                        $builder->where('levels.status', false);
                    }
                }),
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
            'exportPDF' => 'Exportar PDF',
            'exportExcel' => 'Exportar EXCEL'
        ];
    }

    public function exportPDF()
    {
        $levels = Level::with(['bia:id,name'])->findMany($this->getSelected());
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        $pdf = Pdf::loadView('pdf.levels', compact('nombreCompleto', 'fecha', 'hora', 'levels'))->output();
        return response()->streamDownload(
            fn () => print($pdf),
            $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Niveles.pdf'
        );
    }

    public function exportExcel()
    {
        $levels = $this->getSelected();
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        return Excel::download(new LevelsExport($levels), $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Niveles.xlsx');
    }
}
