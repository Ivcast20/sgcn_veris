<?php

namespace App\Exports;

use App\Models\Cause;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CauseExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
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
            'Nombre',
            'Estado'
        ];
    }

    public function map($row): array
    {
        return [
            $row->id, //A
            $row->name, //B
            $row->status == 1 ? 'Activo' : 'Inactivo',
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
        return Cause::findMany($this->ids);
    }
}
