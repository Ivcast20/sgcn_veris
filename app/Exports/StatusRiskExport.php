<?php

namespace App\Exports;

use App\Models\StatusRisk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StatusRiskExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping, WithColumnWidths
{
    public $ids;

    public function __construct($p_ids)
    {
        $this->ids = $p_ids;
    }

    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Estado',
            'Fecha de creación',
            'Fecha de actualización'
        ];
    }

    public function map($row): array
    {
        return [
            $row->id, //A
            $row->name,
            $row->status == 1 ? 'Activo' : 'Inactivo',
            $row->created_at->format('d/m/Y H:i'),
            $row->updated_at->format('d/m/Y H:i')
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
        return StatusRisk::findMany($this->ids);
    }
}

