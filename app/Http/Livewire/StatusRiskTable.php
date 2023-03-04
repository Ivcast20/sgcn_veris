<?php

namespace App\Http\Livewire;

use App\Exports\StatusRiskExport;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\StatusRisk;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class StatusRiskTable extends DataTableComponent
{
    protected $model = StatusRisk::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        $usuario = Auth::user();
        $puede_editar = $usuario->hasPermissionTo('admin.risk_treatment_status.edit');

        $columnas = [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "name")
                ->searchable()
                ->sortable(),
            BooleanColumn::make("  Estado", "status")
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

        if ($puede_editar) {
            $columnas = array_merge($columnas, [
                LinkColumn::make('Acciones')
                    ->title(fn ($row) => 'Editar')
                    ->location(fn ($row) => route('status_risks.edit', $row->id))
                    ->attributes(function ($row) {
                        return ['class' => 'btn btn-success'];
                    }),
            ]);
        }

        return $columnas;
    }

    public function bulkActions(): array
    {
        return [
            'exportExcel' => 'exportar EXCEL'
        ];
    }

    public function exportExcel()
    {
        $estados = $this->getSelected();
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        return Excel::download(new StatusRiskExport($estados), $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Estados de tratamiento.xlsx');
    }
}
