<?php

namespace App\Http\Livewire;

use App\Exports\ProbabilityLevelExport;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\ProbabilityLevel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class ProbabilityLevelTable extends DataTableComponent
{
    protected $model = ProbabilityLevel::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        $usuario = Auth::user();
        $puede_editar = $usuario->hasPermissionTo('admin.probability_levels.edit');
        $columnas = [
            Column::make("Id", "id")
                ->sortable(),
                Column::make("Valor", "value")
                ->sortable(),
            Column::make("Clasificación", "clasification")
                ->sortable()
                ->searchable(),
            Column::make("Descripción", "description")
                ->sortable(),
            BooleanColumn::make("Estado", "status")
                ->sortable(),
            Column::make("Fecha de creación", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable()
                ->deselected()
        ];

        if($puede_editar)
        {
            $columnas = array_merge($columnas,
            [
                LinkColumn::make('Acciones')
                ->title(fn ($row) => 'Editar')
                ->location(fn ($row) => route('probability_levels.edit', $row->id))
                ->attributes(function ($row) {
                    return ['class' => 'btn btn-success'];
                })
            ]);
        }

        return $columnas;
    }

    public function bulkActions(): array
    {
        return [
            'exportExcel' => 'Exportar EXCEL'
        ];
    }

    public function exportExcel()
    {
        $levels = $this->getSelected();
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        return Excel::download(new ProbabilityLevelExport($levels), $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Niveles de probabilidad.xlsx');
    }
}
