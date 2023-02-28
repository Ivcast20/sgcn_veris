<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\RiskLevel;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class RiskLevelTable extends DataTableComponent
{
    protected $model = RiskLevel::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Rango", "range")
                ->sortable(),
            Column::make("Clasificación", "clasification")
                ->sortable(),
            Column::make("Descripción", "description")
                ->sortable(),
            BooleanColumn::make("Estado", "status")
                ->sortable(),
            Column::make("Creación", "created_at")
                ->sortable(),
            Column::make("Actualización", "updated_at")
                ->sortable()
                ->deselected(),
        ];
    }
}
