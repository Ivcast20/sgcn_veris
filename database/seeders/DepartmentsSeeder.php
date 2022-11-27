<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' => 'Sistemas',
            'description' => 'Esta es una descripción de prueba 1'
        ]);

        Department::create([
            'name' => 'Ventas',
            'description' => 'Esta es la descripcion del departamento 2'
        ]);
    }
}
