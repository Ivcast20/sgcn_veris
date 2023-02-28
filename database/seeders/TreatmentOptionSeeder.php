<?php

namespace Database\Seeders;

use App\Models\TreatmentOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TreatmentOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TreatmentOption::insert([
            [
                'strategy' => 'Evitar',
                'description' => 'Se debe evitar la actividad o la condición que da lugar al riesgo',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'strategy' => 'Aceptar',
                'description' => 'Se acepta el riesgo, cuando su nivel se encuentra en los rangos tolerables para la empresa (medio o bajo)',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'strategy' => 'Modificar',
                'description' => 'El nivel de riesgo debe ser gestionado introduciendo, eliminando o alterando controles para que el riesgo residual pueda ser revaluado como aceptable. El seleccionar esta opción podrá cambiar la probabilidad o el impacto.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'strategy' => 'Compartir',
                'description' => 'El riesgo debe ser compartido con otra parte que pueda manejar de manera con mayor eficacia el riesgo particular dependiendo de la evaluación del riesgo.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'strategy' => 'Retener',
                'description' => 'Si el nivel de riesgo no cumple los criterios de aceptación y la implementación de controles sobrepasa la potencial pérdida en caso de que se materialice el riesgo, se puede tomar la decisión de retener el riesgo y vivir con las consecuencias si ocurriera.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
