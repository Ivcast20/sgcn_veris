<?php

namespace App\Http\Livewire;

use App\Exports\ImpactLevelExport;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\ImpactLevel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class ImpactLevelTable extends DataTableComponent
{
    protected $model = ImpactLevel::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        $usuario = Auth::user();
        $puede_editar = $usuario->hasPermissionTo('admin.impact_levels.edit');
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
            $columnas = array_merge($columnas, [
                LinkColumn::make('Acciones')
                ->title(fn ($row) => 'Editar')
                ->location(fn ($row) => route('impact_levels.edit', $row->id))
                ->attributes(function ($row) {
                    return ['class' => 'btn btn-success'];
                })
            ]);
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
        return Excel::download(new ImpactLevelExport($levels), $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Niveles de impacto.xlsx');
    }
}
