<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Criteria::create([
            'bia_id' => 1,
            'level_id' => 1,
            'parameter_id' => 1,
            'description' => 'No se generan pérdida de ingresos por paralizar el servicio/proceso/actividad.'
        ]);

        Criteria::create([
            'bia_id' => 1,
            'level_id' => 1,
            'parameter_id' => 2,
            'description' => 'No hay afectación a la reputación.'
        ]);

        Criteria::create([
            'bia_id' => 1,
            'level_id' => 1,
            'parameter_id' => 3,
            'description' => 'No tiene afectación a requisitos legales o regulatorios.'
        ]);

        Criteria::create([
            'bia_id' => 1,
            'level_id' => 1,
            'parameter_id' => 4,
            'description' => 'No afecta los requisitos contractuales.'
        ]);

        Criteria::create([
            'bia_id' => 1,
            'level_id' => 1,
            'parameter_id' => 5,
            'description' => 'No hay impacto en salud / ambiental'
        ]);


        //Nivel 2
        Criteria::create([
            'bia_id' => 1,
            'level_id' => 2,
            'parameter_id' => 1,
            'description' => 'Existe pérdida de ingresos  tolerable por paralizar el servicio/proceso/actividad (no afecta punto de equilibrio de la central).'
        ]);

        Criteria::create([
            'bia_id' => 1,
            'level_id' => 2,
            'parameter_id' => 2,
            'description' => 'Se tiene por lo menos una comunicación de llamados de atención que afecten a la reputación.'
        ]);

        Criteria::create([
            'bia_id' => 1,
            'level_id' => 2,
            'parameter_id' => 3,
            'description' => 'Se presentan desviaciones dentro de parámetros permitidos.(Ej: Recepción de notificación del ente legal o regulatorio con plazos de entrega.)'
        ]);

        Criteria::create([
            'bia_id' => 1,
            'level_id' => 2,
            'parameter_id' => 4,
            'description' => 'Incumplimiento de los requisitos contractuales con afectación de los niveles de servicio pero no paraliza la continuidad de la atención.'
        ]);

        Criteria::create([
            'bia_id' => 1,
            'level_id' => 2,
            'parameter_id' => 5,
            'description' => 'Se presentan eventos que afectan la salud pero no ocasionan condiciones de discapacidad. Consecuencias ambientales recuperables'
        ]);

        //Nivel 3
        Criteria::create([
            'bia_id' => 1,
            'level_id' => 3,
            'parameter_id' => 1,
            'description' => 'Se deja de percibir ingresos por paralizar el servicio/proceso/actividad (afectando punto de equilibrio de la central).'
        ]);

        Criteria::create([
            'bia_id' => 1,
            'level_id' => 3,
            'parameter_id' => 2,
            'description' => 'Más de una comunicación de llamado de atención que afecten a la reputación. (Trending Topic en redes sociales, o expuesto en prensa)'
        ]);

        Criteria::create([
            'bia_id' => 1,
            'level_id' => 3,
            'parameter_id' => 3,
            'description' => 'Se tiene como resultado sanciones que impiden la continuidad del servicio.'
        ]);

        Criteria::create([
            'bia_id' => 1,
            'level_id' => 3,
            'parameter_id' => 4,
            'description' => 'Incumplimiento de requisitos contractuales con afectación a los niveles de servicio acordados con paralización a la continuidad de la atención.'
        ]);

        Criteria::create([
            'bia_id' => 1,
            'level_id' => 3,
            'parameter_id' => 5,
            'description' => 'Se presentan eventos que afectan la salud ocasionando condiciones de discapacidad y/o muertes. Puede presentarse consecuencias ambientales permanentes.'
        ]);


    }
}
