<?php

namespace App\Exports;

use App\Models\Risk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RiskExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping, WithColumnWidths
{
    public $ids;

    public function __construct($p_ids)
    {
        $this->ids = $p_ids;
    }

    public function headings(): array
    {
        return [
            'Código',
            'Descripción',
            'Causas',
            'Consecuencias',
            'Dueño del riesgo',
            'Controles existentes',
            'Probabilidad',
            'Impacto',
            'Nivel de riesgo',
            'Es aceptable',
            'Opción de tratamiento',
            'Plan de tratamiento',
            'Responsable',
            'Recursos',
            'Fecha de inicio',
            'Fecha de fin',
            'Estado de tratamiento',
            'Estado'
        ];
    }

    public function map($row): array
    {
        return [
            $row->code, //A
            $row->description, //B
            $row->causes->pluck('name')->implode(', '), //C
            $row->consecuences, //D
            $row->department->name, //E
            $row->existing_controls, //F
            $row->probability, //G
            $row->impact, //H
            $row->risk_level, //I
            $row->is_aceptable == 1 ? 'Si' : 'No', //J
            $row->treatment_option->strategy, //K
            $row->treatment_plan, //L
            $row->responsable, //M
            $row->resources, //N
            $row->start_date, //O
            $row->end_date, //P
            $row->treatment_status->name, //Q
            $row->status == 1 ? 'Activo' : 'Inactivo' //R
        ];
    }

    public function columnWidths(): array
    {
        return [
            // 'B' => 50,           
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Risk::with(['causes','department','treatment_option','treatment_status'])->findMany($this->ids);
    }
}
