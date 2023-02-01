<?php

namespace Database\Seeders;

use App\Models\BiaEstado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiaEstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Estado 1
        BiaEstado::create([
            'name' => 'Parametrización del Bia'
        ]);
        //Estado 2
        BiaEstado::create([
            'name' => 'Calificación de Productos/Servicios'
        ]);
    }
}
