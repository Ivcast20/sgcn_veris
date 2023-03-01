<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Risk;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class RiskTable extends DataTableComponent
{
    protected $model = Risk::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Código", "code")
                ->searchable()
                ->sortable(),
            Column::make("Descripción", "description")
                ->searchable()
                ->sortable(),
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
            Column::make("Estado", "treatment_status.name")
                ->sortable(),
            BooleanColumn::make("Activo", "status")
                ->sortable(),
            Column::make("Creación", "created_at")
                ->sortable(),
            Column::make("Actualización", "updated_at")
                ->deselected()
                ->sortable(),
        ];
    }
}
