<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\BiaProcess;
use Illuminate\Database\Eloquent\Builder;

class BiaReporteTable extends DataTableComponent
{

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
                ->searchable()
                ->sortable(),
            Column::make("Alcance", "alcance")
                ->sortable(),
            Column::make("Estado", "estado.name")
                ->sortable(),
            Column::make("Status", "status")
                ->sortable(),
            Column::make("Fecha inicio", "fecha_inicio")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }


    public function builder(): Builder
    {
        return BiaProcess::where('estado_id', 5);
    }
}
