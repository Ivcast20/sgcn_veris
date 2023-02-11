<?php

namespace App\Http\Livewire;

use App\Models\BiaProcess;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Criteria;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class CriteriaTable extends DataTableComponent
{
    protected $model = Criteria::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setHideBulkActionsWhenEmptyEnabled();
        $this->setFilterLayout('slide-down');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("BIA", "bia.name")
                ->sortable(),
            Column::make("Nivel", "level.name")
                ->sortable(),
            Column::make("Parámetro", "parameter.name")
                ->sortable(),
            Column::make("Descripción", "description"),
            BooleanColumn::make("Estado", "status")
                ->sortable(),
            Column::make("Fecha de creación", "created_at")
                ->sortable(),
            Column::make("Fecha de actualización", "updated_at")
                ->sortable()
                ->deselected(),
        ];
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Estado', 'status')
                ->options([
                    '' => 'Todos',
                    '1' => 'Activo',
                    '0' => 'Inactivo',
                ])->filter(function (Builder $builder, string $value) {
                    if ($value === '1') {
                        $builder->where('criterias.status', true);
                    } elseif ($value === '0') {
                        $builder->where('criterias.status', false);
                    }
                }),
            SelectFilter::make('BIA')
                ->options(
                    array_merge(['' => 'Todas'], BiaProcess::query()
                        ->orderBy('name')
                        ->get('name')
                        ->keyBy('name')
                        ->map(fn ($categ) => $categ->name)
                        ->toArray())
                )
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('bia_processes.name', $value);
                }),
        ];
    }
}
