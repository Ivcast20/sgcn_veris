<?php

namespace App\Exports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CategoriesExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
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
            $row->status == 1 ? 'Activo' : 'Inactivo',
            $row->created_at_r,
            $row->updated_at_r
        ];
    }

    public function collection()
    {
        return Category::findMany($this->ids);
    }
}
