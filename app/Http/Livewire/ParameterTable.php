<?php

namespace App\Http\Livewire;

use App\Models\BiaProcess;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Parameter;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
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
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("BIA", "bia.name")
                ->sortable(),
            Column::make("Fecha de creación", "created_at")
                ->sortable(),
            Column::make("Fecha de actualización", "updated_at")
                ->sortable(),
            BooleanColumn::make("Estado", "status")
                ->sortable(),
        ];
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('BIA')
                ->options(
                    array_merge(['' => 'Todos'], BiaProcess::query()
                        ->orderBy('id','desc')
                        ->where('status',true)
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
