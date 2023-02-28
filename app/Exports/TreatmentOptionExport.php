<?php

namespace App\Exports;

use App\Models\TreatmentOption;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TreatmentOptionExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping, WithColumnWidths
{
    public $ids;

    public function __construct($p_ids)
    {
        $this->ids = $p_ids;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Estrategia',
            'Descripción',
            'Estado',
            'Fecha de creación',
            'Fecha de actualización'
        ];
    }

    public function map($row): array
    {
        return [
            $row->id,
            $row->strategy,
            $row->description,
            $row->status == 1 ? 'Activo' : 'Inactivo',
            $row->created_at->format('d/m/Y H:i'),
            $row->updated_at->format('d/m/Y H:i')
        ];
    }

    public function columnWidths(): array
    {
        return [
            'C' => 50,           
        ];
    }

    public function collection()
    {
        return TreatmentOption::findMany($this->ids);
    }
}
