<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Risk;
use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class RiskTable extends DataTableComponent
{
    protected $model = Risk::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        $usuario = Auth::user();
        $puede_editar = $usuario->hasPermissionTo('admin.risks.edit');
        $puede_ver_riesgo = $usuario->hasPermissionTo('admin.risks.show');
        
        $columnas = [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Código", "code")
                ->searchable()
                ->sortable(),
            Column::make("Descripción", "description")
                ->searchable()
                ->sortable(),
            Column::make("Causas")
                ->label(fn($row) => $row->causes->pluck('name')->implode(', ')),
            Column::make("Consecuencias", "consecuences")
                ->sortable(),
            Column::make("Dueño del riesgo", "department.name")
                ->sortable(),
            Column::make("Controles existentes", "existing_controls")
                ->sortable(),
            Column::make("Probabilidad", "probability")
                ->sortable(),
            Column::make("Impacto", "impact")
                ->sortable(),
            Column::make("Nivel de riesgo", "risk_level")
                ->sortable(),
            BooleanColumn::make("Es aceptable", "is_aceptable")
                ->sortable(),
            Column::make("Opción de tratamiento", "treatment_option.strategy")
                ->sortable(),
            Column::make("Plan de tratamiento", "treatment_plan")
                ->sortable(),
            Column::make("Responsable", "responsable")
                ->sortable(),
            Column::make("Recursos", "resources")
                ->sortable(),
            Column::make("Fecha de inicio", "start_date")
                ->sortable(),
            Column::make("Fecha de fin", "end_date")
                ->sortable(),
            Column::make("Estado de tratamiento", "treatment_status.name")
                ->sortable(),
            BooleanColumn::make("Estado", "status")
                ->sortable(),
            Column::make("Creación", "created_at")
                ->sortable(),
            Column::make("Actualización", "updated_at")
                ->deselected()
                ->sortable(),
        ];

        if($puede_ver_riesgo)
        {
            $columnas = array_merge($columnas, [
                LinkColumn::make('Ver')
                    ->title(fn ($row) => 'Ver')
                    ->location(fn ($row) => route('risks.show', $row->id))
                    ->attributes(function ($row) {
                        return [
                            'class' => 'btn btn-info'
                        ];
                    })
                ]);
        }

        if($puede_editar)
        {
            $columnas = array_merge($columnas, [
                LinkColumn::make('Editar')
                    ->title(fn ($row) => 'Editar')
                    ->location(fn ($row) => route('risks.edit', $row->id))
                    ->attributes(function ($row) {
                        return [
                            'class' => 'btn btn-success'
                        ];
                    })
                ]);
        }

        return $columnas;
    }
}
