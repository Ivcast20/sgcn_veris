<?php

namespace App\Exports;

use App\Models\ProductScoreAverage;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CriticalProductExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
{
    public $bia_id;

    public function __construct($bia_id)
    {
        $this->bia_id = $bia_id;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nombre del producto',
            'Categoría del producto',
            'Calificación total',
            'Es crítico',
            'Persona Asignada',
            'Cargo'
        ];
    }

    public function map($row): array
    {
        return [
            $row->id,
            $row->product->name,
            $row->product->category->name,
            $row->total_score,
            $row->is_critical == 1 ? 'Si' : 'No',
            $row->user ? $row->user->name . ' ' . $row->user->last_name : 'Sin Asignar',
            $row->user ? $row->user->cargo : 'N/A'
        ];
    }

    public function collection()
    {
        return ProductScoreAverage::with(
            [
                'product:id,name,category_id' => ['category:id,name'],
                'user:id,name,last_name,cargo'
            ]
        )->where([['bia_process_id', $this->bia_id],['is_critical',true]])->get();
    }
}
