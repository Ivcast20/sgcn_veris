<?php

namespace Database\Seeders;

use App\Models\BiaProcess;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class BiaProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $procesoBia = BiaProcess::create([
            'name' => 'BIA 2022',
            'alcance' => 'Prestación de servicios de salud, atención médica presencial y/o virtual de servicios como consultas, imágenes, óptica, terapias, odontología, procedimientos, laboratorio clínico y farmacia en Centrales Médicas y Atención Prioritaria, Salud a empresas, dispensarios y chequeos, y servicios a domicilio de tomas de muestra y entrega de medicamentos',
            'fecha_inicio' => Carbon::createFromDate(2022, 5, 30),
            'estado_id' => 1,
        ]);

        $productos = Product::all()->pluck('id');

        $procesoBia->products()->sync($productos);
    }
}
