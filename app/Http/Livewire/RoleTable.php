<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Role;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class RoleTable extends DataTableComponent
{
    //protected $model = Role::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setHideBulkActionsWhenEmptyEnabled();
        $this->setFilterLayout('slide-down');
    }

    public function builder(): Builder
    {
        return Role::withTrashed();
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "name")
                ->sortable()
                ->searchable(),
            Column::make("Fecha de creación", "created_at")
                ->sortable(),
            BooleanColumn::make('Estado', 'status'),
            // LinkColumn::make('Acciones')
            //     ->title(fn ($row) => 'Editar')
            //     ->location(fn ($row) => route('roles.edit', $row->id))
            //     ->attributes(function ($row) {
            //         return ['class' => 'btn btn-success'];
            //     }),
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
        // $departamentos = Department::findMany($this->getSelected());
        // $usuario = Auth::user();
        // $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        // $fecha = Carbon::now()->format('d-m-Y');
        // $hora = Carbon::now()->toTimeString();
        // $pdf = PDF::loadView('pdf.departments', compact('nombreCompleto','fecha','hora','departamentos'))->output();
        // return response()->streamDownload(
        //     fn() => print($pdf), Carbon::now()->toDateTimeString() . ' Modulo Departamentos.pdf'
        // );
    }

    public function exportExcel()
    {
        dd($this->getSelected());
        // $departamentos = $this->getSelected();
        // $usuario = Auth::user();
        // $nombreCompleto = $usuario->lastname . ' ' . $usuario->name;
        // $fecha = Carbon::now()->format('d-m-Y');
        // $hora = Carbon::now()->toTimeString();
        // return Excel::download(new DepartmentsExport($departamentos), $fecha . ' ' . $hora . ' ' . $nombreCompleto . '.xlsx');
    }
}
