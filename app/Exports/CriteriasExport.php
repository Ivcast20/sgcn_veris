<?php

namespace App\Exports;

use App\Models\Criteria;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CriteriasExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
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
            'Nombre BIA',
            'Parámetro',
            'Nivel',
            'Criterio',
            'Fecha de creación',
            'Fecha de actualización',
            'Estado'
        ];
    }

    public function map($row): array
    {
        return [
            $row->id,
            $row->bia->name,
            $row->parameter->name,
            $row->level->name,
            $row->description,
            $row->created_at->format('d/m/Y H:i'),
            $row->updated_at->format('d/m/Y H:i'),
            $row->status == 1 ? 'Activo' : 'Inactivo'
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Criteria::with(['bia:id,name','level:id,name','parameter:id,name'])->get();
    }
}
