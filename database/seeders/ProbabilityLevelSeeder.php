<?php

namespace Database\Seeders;

use App\Models\ProbabilityLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProbabilityLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProbabilityLevel::insert([
            [
                'value' => 1,
                'clasification' => 'BAJO',
                'description' => 'Puede ocurrir una vez al año',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'value' => 2,
                'clasification' => 'MEDIO',
                'description' => 'Puede ocurrir de 3 a 6 veces en el año (no ocurre de manera mensual)',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'value' => 3,
                'clasification' => 'ALTO',
                'description' => 'Puede ocurrir en la mayoría de las circunstancias; al menos una vez por mes',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
