<?php

namespace App\Http\Livewire;

use App\Models\BiaProcess;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Parameter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class ParameterTable extends DataTableComponent
{
    protected $model = Parameter::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setHideBulkActionsWhenEmptyEnabled();
        $this->setFilterLayout('slide-down');
    }

    public function columns(): array
    {
        $columnas = [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("BIA", "bia.name")
                ->sortable(),
            Column::make("Fecha de creación", "created_at")
                ->format(function ($value) {
                    return Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d/m/Y');
                }),
            Column::make("Fecha de actualización", "updated_at")
                ->format(function ($value) {
                    return Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d/m/Y');
                })
                ->deselected(),
            BooleanColumn::make("Estado", "status")
                ->sortable(),
        ];

        $columnas = array_merge(
            $columnas,
            [LinkColumn::make('Acciones')
                ->title(fn ($row) => 'Editar')
                ->location(fn ($row) => route('parameters.edit', $row->id))
                ->attributes(function ($row) {
                    return ['class' => 'btn btn-success'];
                })
            ]);

        return $columnas;
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('BIA')
                ->options(
                    array_merge(['' => 'Todos'], BiaProcess::query()
                        ->orderBy('id', 'desc')
                        ->where('status', true)
                        ->get('name')
                        ->keyBy('name')
                        ->map(fn ($bia) => $bia->name)
                        ->toArray())
                )
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('bia_processes.name', $value);
                }),
        ];
    }

    public function bulkActions(): array
    {
        return [
            'exportPDF' => 'exportar PDF',
            'exportExcel' => 'exportar EXCEL'
        ];
    }

    public function exportPDF()
    {
        return 'Hola';
    }

    public function exportExcel()
    {
        return 'Chao';
    }
}
