<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Source;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class SourceTable extends DataTableComponent
{
    protected $model = Source::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "name")
                ->sortable()
                ->searchable(),
            Column::make("Descripción", "description")
                ->sortable(),
            BooleanColumn::make("Estado", "status")
                ->sortable(),
            Column::make("Fecha de creación", "created_at")
                ->sortable(),
            Column::make("Fecha de actualización", "updated_at")
                ->sortable(),
            LinkColumn::make('Acciones')
                ->title(fn ($row) => 'Editar')
                ->location(fn ($row) => route('sources.edit', $row->id))
                ->attributes(function ($row) {
                    return ['class' => 'btn btn-success'];
                }),
        ];
    }
}
