<?php

namespace Database\Seeders;

use App\Models\RiskLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiskLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RiskLevel::insert([
            [
                'range' => '1 y 2',
                'clasification' => 'BAJO',
                'description' => 'Riesgo insignificante, con probabilidad baja de ocurrencia, con impacto bajo. Probabilidad media, impacto bajo, probabilidad baja e impacto media en la consecución de los objetivos del proceso. No afecta las operaciones ni la productividad. No hay consecuencias.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'range' => '3 y 4',
                'clasification' => 'MEDIO',
                'description' => 'Riesgo moderado, con probabilidad de ocurrencia media e impacto leve o moderado en la consecución de los objetivos del proceso. Hay una posibilidad de que las operaciones y la productividad se vean afectados.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'range' => '6 y 9',
                'clasification' => 'ALTO',
                'description' => 'Riesgo con impacto alto, con probabilidad de ocurrencia media y alta, e impacto medio y alto en la consecución de los objetivos del proceso. Lo que conlleva a una pérdida  costosa y afectar totalmente las operaciones y la productividad de los procesos.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
