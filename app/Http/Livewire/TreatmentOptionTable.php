<?php

namespace App\Http\Livewire;

use App\Exports\TreatmentOptionExport;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\TreatmentOption;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class TreatmentOptionTable extends DataTableComponent
{
    protected $model = TreatmentOption::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        $usuario = Auth::user();
        $puede_editar = $usuario->hasPermissionTo('admin.treatment_options.edit');
        $columnas = [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Estrategia", "strategy")
                ->searchable()
                ->sortable(),
            Column::make("Descripción", "description")
                ->sortable(),
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
                ->deselected()
        ];

        if($puede_editar)
        {
            $columnas = array_merge($columnas, [
                LinkColumn::make('Acciones')
                ->title(fn ($row) => 'Editar')
                ->location(fn ($row) => route('treatmentoptions.edit', $row->id))
                ->attributes(function ($row) {
                    return ['class' => 'btn btn-success'];
                }),
            ]);
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
                        $builder->where('treatment_options.status', true);
                    } elseif ($value === '0') {
                        $builder->where('treatment_options.status', false);
                    }
                })
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
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        $treatmentOptions = TreatmentOption::findMany($this->getSelected());
        $pdf = Pdf::loadView('pdf.matriz_riesgos.treatment_options', compact('nombreCompleto', 'fecha', 'hora', 'treatmentOptions'))->output();
        return response()->streamDownload(
            fn () => print($pdf),
            $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Opciones de Tratamiento.pdf'
        );
    }

    public function exportExcel()
    {
        $opciones = $this->getSelected();
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        return Excel::download(new TreatmentOptionExport($opciones), $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Opciones de Tratamiento.xlsx');
    }
}
