<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\RiskLevel;
use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class RiskLevelTable extends DataTableComponent
{
    protected $model = RiskLevel::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        $usuario = Auth::user();
        $puede_editar = $usuario->hasPermissionTo('admin.risk_levels.edit');

        $columnas = [
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

        if($puede_editar)
        {
            $columnas = array_merge($columnas, [
                LinkColumn::make('Editar')
                    ->title(fn ($row) => 'Editar')
                    ->location(fn ($row) => route('risk_levels.edit', $row->id))
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
