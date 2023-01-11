<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Atención Médica Presencial',
            'status' => true,
        ]);

        Category::create([
            'name' => 'Salud a Empresas',
            'status' => true,
        ]);

        Category::create([
            'name' => 'Atención Médica Virtual',
            'status' => true,
        ]);
    }
}
