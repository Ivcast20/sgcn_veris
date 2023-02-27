<?php

namespace App\Exports;

use App\Models\Activity;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CriticActivitiesExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
{
    public $critic_product_id;

    public function __construct($p_id)
    {
        $this->critic_product_id = $p_id;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nombre',
            'MTPD',
            'RTO',
            'RPO',
            'Mínimo nivel aceptable',
            'Prioridad de recupercación',
            'Dependencia de otros procesos',
            '¿Qué procesos? (en caso de aplicar',
            'Periodos críticos',
            'Procedimientos Alternativos',
            'Cantidad de personas en procedimiento normal',
            'Cantidad de personas requeridas',
            'Aplicaciones',
            'Equipos',
            'Servicio tecnológico',
            'Espacio Físico',
            'Personas',
            'Competencias personales',
            'Proveedores',
            'Otros recursos',
        ];
    }

    public function map($row): array
    {
        return [
            $row->id,
            $row->name,
            $row->mtpd,
            $row->rto,
            $row->rpo,
            $row->aceptable_minimun,
            $row->priority,
            $row->other_poc_dep == 1 ? 'Si' : 'No',
            $row->processes,
            $row->criticial_periods,
            $row->procedure,
            $row->normal_op_people,
            $row->people_required,
            $row->applications,
            $row->equiptment,
            $row->services,
            $row->physical_space,
            $row->people,
            $row->skills,
            $row->providers,
            $row->other_resources
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Activity::where([['critic_product_id',$this->critic_product_id],['is_critical',true]])->get();
    }
}
