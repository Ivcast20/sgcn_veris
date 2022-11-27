<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Department;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class DepartmentTable extends DataTableComponent
{
    protected $model = Department::class;

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
            Column::make("Nombre", "name")
                ->sortable(),
            Column::make("Descripción", "description")
                ->sortable(),
            Column::make("Fecha de creación", "created_at")
                ->sortable(),
            BooleanColumn::make("Estado", "status")
                ->sortable(),
            LinkColumn::make('Acciones')
                ->title(fn ($row) => 'Editar')
                ->location(fn ($row) => route('departments.edit', $row->id))
                ->attributes(function ($row) {
                    if (2 === 1) {
                        return ['class' => 'btn btn-success'];
                    } else {
                        return ['class' => 'd-none'];
                    }
                }),
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
                        $builder->where('status', true);
                    } elseif ($value === '0') {
                        $builder->where('status', false);
                    }
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
        dd($this->getSelected());
    }

    public function exportExcel()
    {
        dd($this->getSelected());
    }
}
