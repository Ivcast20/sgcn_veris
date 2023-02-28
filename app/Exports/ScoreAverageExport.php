<?php

namespace App\Exports;

use App\Models\ProductScoreAverage;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ScoreAverageExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
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
            'Es crítico'
        ];
    }

    public function map($row): array
    {
        return [
            $row->id,
            $row->product->name,
            $row->product->category->name,
            $row->total_score,
            $row->is_critical == 1 ? 'Si' : 'No'
        ];
    }

    public function collection()
    {
        return ProductScoreAverage::with(
            [
                'product:id,name,category_id' => ['category:id,name']
            ]
        )->where('bia_process_id', $this->bia_id)->get();
    }
}
