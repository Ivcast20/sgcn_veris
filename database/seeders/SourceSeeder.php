<?php

namespace Database\Seeders;

use App\Models\Source;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Source::insert([
            [
                'name' => 'Cambios en el Entorno',
                'description' => 'Se consideran cambios internos y externos',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Disponibilidad de recursos',
                'description' => 'Se considera falta de recursos, materiales, presupuesto para el cumplimiento de las labores',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Factor Humano',
                'description' => 'Desempeño, competencias, clima laboral, rotación del personal, errores, compromiso, responsabilidad y autoridad',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Infraestructura',
                'description' => 'Elementos de apoyo para el funcionamiento de la empresa. Ej: Edificios, espacios de trabajo, almacenamiento',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Organización de Trabajo',
                'description' => 'Distribución de trabajo: criterios, métodos, procesos y procedimientos',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Factores Naturales',
                'description' => 'Cambios climáticos, desplazamientos, sismos, inundaciones, incendios forestales, actividad volcánica (ceniza)',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Externos',
                'description' => 'Proveedores, ente regulador, clientes, gremios, ataques informáticos',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Agentes Biológicos',
                'description' => 'Animales, plagas, enfermedades y Alergias',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Factores tecnológicos',
                'description' => 'Fallas de red, fallas de aplicaciones, fallas de hardware, bugs',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
