<?php

namespace App\Http\Livewire;

use App\Exports\ProductsExport;
use App\Models\Category;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class ProductTable extends DataTableComponent
{
    protected $model = Product::class;

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
                ->sortable()
                ->searchable(),
            Column::make("Categoría", "category.name"),
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
            LinkColumn::make('Acciones')
                ->title(fn ($row) => 'Editar')
                ->location(fn ($row) => route('products.edit', $row->id))
                ->attributes(function ($row) {
                    return ['class' => 'btn btn-success'];
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
                        $builder->where('products.status', true);
                    } elseif ($value === '0') {
                        $builder->where('products.status', false);
                    }
                }),
            SelectFilter::make('Categorías')
                ->options(
                    array_merge(['' => 'Todas'], Category::query()
                        ->orderBy('name')
                        ->get('name')
                        ->keyBy('name')
                        ->map(fn ($categ) => $categ->name)
                        ->toArray())
                )
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('categories.name', $value);
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
        $productos = Product::with(['category:id,name'])->findMany($this->getSelected());
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        $pdf = Pdf::loadView('pdf.products', compact('nombreCompleto', 'fecha', 'hora', 'productos'))->output();
        return response()->streamDownload(
            fn () => print($pdf),
            $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Productos.pdf'
        );
    }

    public function exportExcel()
    {
         $productos = $this->getSelected();
         $usuario = Auth::user();
         $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
         $fecha = Carbon::now()->format('d-m-Y');
         $hora = Carbon::now()->format('H:i');
         return Excel::download(new ProductsExport($productos), $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Productos.xlsx');
    }
}
