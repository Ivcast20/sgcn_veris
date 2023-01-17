<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class UserTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setHideBulkActionsWhenEmptyEnabled();
        $this->setFilterLayout('slide-down');
        $this->setDefaultSort('id', 'desc');
    }

    public function bulkActions(): array
    {
        return [
            'exportPDF' => 'exportar PDF',
            'exportExcel' => 'exportar EXCEL'
        ];
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make(__('Name'), "name")
                ->sortable()
                ->searchable(),
            column::make('Apellido',"last_name")
                ->sortable()
                ->searchable(),
            Column::make(__('Email'), "email")
                ->sortable(),
            Column::make(__('Created at'), "created_at")
                ->sortable(),
            Column::make(__('Updated at'), "updated_at")
                ->sortable(),
            BooleanColumn::make('Estado', 'status')
        ];
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Estado','status')
                ->options([
                    '' => 'Todos',
                    '1' => 'Activo',
                    '0' => 'Inactivo',
                ])->filter(function(Builder $builder, string $value) {
                    if ($value === '1') {
                        $builder->where('status', true);
                    } elseif ($value === '0') {
                        $builder->where('status', false);
                    }
                }),
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
