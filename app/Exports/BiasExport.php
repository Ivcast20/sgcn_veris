<?php

namespace App\Exports;

use App\Models\BiaProcess;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BiasExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
{
    public $ids;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($p_ids)
    {
        $this->ids = $p_ids;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nombre',
            'Alcance',
            'Estado',
            'Fecha de creación',
            'Fecha de actualización'
        ];
    }

    public function map($row): array
    {
        return [
            $row->id,
            $row->name,
            $row->alcance,
            $row->status == 1 ? 'Activo' : 'Inactivo',
            $row->created_at,
            $row->updated_at
        ];
    }

    public function collection()
    {
        return BiaProcess::findMany($this->ids);
    }
}
