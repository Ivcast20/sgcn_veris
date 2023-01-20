<?php

namespace App\Exports;

use App\Models\Department;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class DepartmentsExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
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
            $row->name,
            $row->description,
            $row->status == 1 ? 'Activo' : 'Inactivo',
            $row->created_at->format('d/m/Y'),
            $row->updated_at->format('d/m/Y')
        ];
    }

    public function collection()
    {
        return Department::findMany($this->ids);
    }
}