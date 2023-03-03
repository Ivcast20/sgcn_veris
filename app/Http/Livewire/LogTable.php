<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\ViewLogApp;

class LogTable extends DataTableComponent
{
    protected $model = ViewLogApp::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Last name", "last_name")
                ->sortable(),
            Column::make("Accion", "accion")
                ->sortable(),
            Column::make("Auditable type", "auditable_type")
                ->sortable(),
            Column::make("Url", "url")
                ->sortable(),
            Column::make("Dispositivo", "dispositivo")
                ->sortable(),
            Column::make("Antes", "antes")
                ->sortable(),
            Column::make("Despues", "despues")
                ->sortable(),
            Column::make("Fecha accion", "fecha_accion")
                ->sortable(),
        ];
    }
}
