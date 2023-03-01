<?php

namespace Database\Seeders;

use App\Models\StatusRisk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusRiskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusRisk::create([
            'name' => 'Sin Estado'
        ]);
        StatusRisk::create([
            'name' => 'Por iniciar'
        ]);
        StatusRisk::create([
            'name' => 'No iniciado'
        ]);
        StatusRisk::create([
            'name' => 'En proceso'
        ]);
        StatusRisk::create([
            'name' => 'En ejecución'
        ]);
    }
}
