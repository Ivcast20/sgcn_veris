<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\BiaProcess;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

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
            Column::make("Nombre", "name")
                ->searchable()
                ->sortable(),
            Column::make("Alcance", "alcance")
                ->sortable(),
            Column::make("Estado", "estado.name")
                ->sortable(),
            BooleanColumn::make("Estado", "status")
                ->sortable(),
            Column::make("Fecha inicio", "fecha_inicio")
                ->sortable(),
            LinkColumn::make('Acciones')
                ->title(fn ($row) => 'Descargar')
                ->location(fn ($row) => route('bias.reportegeneral', $row->id))
                ->attributes(function ($row) {
                    return [
                        'class' => 'btn btn-success'
                    ];
                }),
        ];
    }


    public function builder(): Builder
    {
        return BiaProcess::where('estado_id', 5);
    }
}
