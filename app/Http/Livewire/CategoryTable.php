<?php

namespace App\Http\Livewire;

use App\Exports\CategoriesExport;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Category;
use Barryvdh\DomPDF\Facade\Pdf;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class CategoryTable extends DataTableComponent
{
    protected $model = Category::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setHideBulkActionsWhenEmptyEnabled();
        $this->setFilterLayout('slide-down');
    }

    public function columns(): array
    {
        $usuario = Auth::user();
        $puede_editar = $usuario->hasPermissionTo('admin.categories.edit');

        $columnas = [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            BooleanColumn::make("Estado", "status")
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
        ];

        if ($puede_editar) {
            $columnas = array_merge(
                $columnas,
                [
                    LinkColumn::make('Acciones')
                        ->title(fn ($row) => 'Editar')
                        ->location(fn ($row) => route('categories.edit', $row->id))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'btn btn-success'
                            ];
                        }),
                ]
            );
        }

        return $columnas;
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
            'exportPDF' => 'Exportar PDF',
            'exportExcel' => 'Exportar EXCEL'
        ];
    }

    public function exportPDF()
    {
        $categorias = Category::findMany($this->getSelected());
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        $pdf = PDF::loadView('pdf.categories', compact('nombreCompleto', 'fecha', 'hora', 'categorias'))->output();
        return response()->streamDownload(
            fn () => print($pdf),
            $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Categorías.pdf'
        );
    }

    public function exportExcel()
    {
        $categorias = $this->getSelected();
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        return Excel::download(new CategoriesExport($categorias), $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Categorías.xlsx');
    }
}
