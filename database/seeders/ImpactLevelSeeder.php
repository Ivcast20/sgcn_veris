<?php

namespace Database\Seeders;

use App\Models\ImpactLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImpactLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ImpactLevel::insert([
            [
                'value' => 1,
                'clasification' => 'BAJO',
                'description' => 'Impacto insignificante, no afectaría actividades ni procesos de la organización o terceros',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'value' => 2,
                'clasification' => 'MEDIO',
                'description' => 'Impacto que podría ocasionar un perjuicio en una actividad o proceso crítico o más de una actividad o proceso no crítico de la organización o terceros',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'value' => 3,
                'clasification' => 'ALTO',
                'description' => 'Impacto que podría ocasionar un perjuicio significativo o catastrófico para la empresa, terceros o podría impedir la ejecución de las actividades de la organización, incumplimientos legales, regulatorios, normativos, hay multas y/o sanciones',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
