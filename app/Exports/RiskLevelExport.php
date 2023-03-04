<?php

namespace App\Exports;

use App\Models\RiskLevel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RiskLevelExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping, WithColumnWidths
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
            'Rango',
            'Clasificación',
            'Descripción'
        ];
    }

    public function map($row): array
    {
        return [
            $row->id, //A
            $row->range,
            $row->clasification,
            $row->description,
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
        return RiskLevel::findMany($this->ids);
    }
}

