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
            'name' => 'Gerencia de Analítica e Inteligencia Empresarial',
            'description' => 'Esta es una descripción del departamento Gerencia de Analítica e Inteligencia Empresarial'
        ]);

        Department::create([
            'name' => 'Finanzas',
            'description' => 'Esta es una descripción del departamento Finanzas'
        ]);

        Department::create([
            'name' => 'Control Interno',
            'description' => 'Esta es una descripción del departamento Control Interno'
        ]);

        Department::create([
            'name' => 'Customer Experience',
            'description' => 'Esta es una descripción del departamento Customer Experience'
        ]);

        Department::create([
            'name' => 'Marketing',
            'description' => 'Esta es una descripción del departamento Marketing'
        ]);

        Department::create([
            'name' => 'Gestión Clínica y Operaciones',
            'description' => 'Esta es una descripción del departamento Gestión Clínica y Operaciones'
        ]);

        Department::create([
            'name' => 'Operaciones',
            'description' => 'Esta es una descripción del departamento Operaciones'
        ]);

        Department::create([
            'name' => 'Comercial',
            'description' => 'Esta es una descripción del departamento Comercial'
        ]);

        Department::create([
            'name' => 'Central Médica Virtual',
            'description' => 'Esta es una descripción del departamento Central Médica Virtual'
        ]);

        Department::create([
            'name' => 'Gestión Humana',
            'description' => 'Esta es una descripción del departamento Gestión Humana'
        ]);

        Department::create([
            'name' => 'Tecnología',
            'description' => 'Esta es una descripción del departamento Tecnología'
        ]);


    }
}
