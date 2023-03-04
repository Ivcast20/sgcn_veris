<?php

namespace App\Exports;

use App\Models\ProbabilityLevel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProbabilityLevelExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
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
            'Valor',
            'Clasificación',
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
            $row->value,
            $row->clasification,
            $row->description,
            $row->status == 1 ? 'Activo' : 'Inactivo',
            $row->created_at->format('d/m/Y H:i'),
            $row->updated_at->format('d/m/Y H:i')
        ];
    }

    public function collection()
    {
        return ProbabilityLevel::findMany($this->ids);
    }
}
