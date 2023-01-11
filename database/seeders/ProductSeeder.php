<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Atención Médica Presencial
        Product::insert([
            [
                'name' => 'Consultas',
                'category_id' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Urgencias',
                'category_id' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laboratorio Clínico',
                'category_id' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Servicio de Imágenes',
                'category_id' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Farmacias',
                'category_id' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Terapias',
                'category_id' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Procedimientos',
                'category_id' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Odontología',
                'category_id' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Óptica',
                'category_id' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        //Servicio de Salud a Empresas
        Product::insert([
            [
                'name' => 'Chequeos',
                'category_id' => 2,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'B2B',
                'category_id' => 2,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dispensarios',
                'category_id' => 2,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        //Atención Médica Virtual
        Product::insert([
            [
                'name' => 'Consultas',
                'category_id' => 3,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laboratorio Clínico (Domicilio - Toma de Muestras)',
                'category_id' => 3,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Farmacias a Domicilio',
                'category_id' => 3,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
