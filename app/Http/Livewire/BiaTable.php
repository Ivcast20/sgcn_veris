<?php

namespace App\Http\Livewire;

use App\Exports\BiasExport;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\BiaProcess;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class BiaTable extends DataTableComponent
{
    protected $model = BiaProcess::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setHideBulkActionsWhenEmptyEnabled();
        $this->setFilterLayout('slide-down');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "name")
                ->sortable(),
            Column::make("Alcance", "alcance")
                ->sortable(),
            BooleanColumn::make("Estado", "status")
                ->sortable(),
            Column::make("Fecha inicio", "fecha_inicio")
                ->sortable(),
            Column::make("Fecha de creación", "created_at")
                ->sortable(),
            Column::make("Fecha de actualización", "updated_at")
                ->sortable(),
            ButtonGroupColumn::make('Acciones')
                ->unclickable()
                ->attributes(function ($row) {
                    return [
                        'class' => 'btn-group-vertical'
                    ];
                })
                ->buttons([
                    LinkColumn::make('Editar')
                        ->title(fn ($row) => 'Editar')
                        ->location(fn ($row) => route('bias.edit', $row->id))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'btn btn-outline-primary'
                            ];
                        }),
                    LinkColumn::make('Ver Productos')
                        ->title(fn ($row) => 'Ver Productos')
                        ->location(fn ($row) => route('verproductos', $row->id))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'btn btn-outline-primary'
                            ];
                        }),
                    LinkColumn::make('Calificar Productos')
                        ->title(fn ($row) => 'Calificar Productos')
                        ->location(fn ($row) => route('bias.edit', $row->id))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'btn btn-outline-primary'
                            ];
                        }),
                ])
        ];
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
                        $builder->where('status', true);
                    } elseif ($value === '0') {
                        $builder->where('status', false);
                    }
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
        $bias = BiaProcess::findMany($this->getSelected());
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->toTimeString();
        $pdf = Pdf::loadView('pdf.bias', compact('nombreCompleto','fecha','hora','bias'))->output();
        return response()->streamDownload(
            fn() => print($pdf), $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo BIA.pdf'
        );
    }

    public function exportExcel()
    {
        // $categorias = $this->getSelected();
        $bias = $this->getSelected();
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->toTimeString();
        return Excel::download(new BiasExport($bias), $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo BIA.xlsx');
    }
}
