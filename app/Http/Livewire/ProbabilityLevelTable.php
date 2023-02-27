<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\ProbabilityLevel;
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
        return [
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
                ->deselected(),
            LinkColumn::make('Acciones')
                ->title(fn ($row) => 'Editar')
                ->location(fn ($row) => route('probability_levels.edit', $row->id))
                ->attributes(function ($row) {
                    return ['class' => 'btn btn-success'];
                })
        ];
    }
}
