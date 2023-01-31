<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DepartmentsSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(BiaEstadosSeeder::class);
        $this->call(BiaProcessSeeder::class);
        $this->call(ParameterSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(CriteriaSeeder::class);
        
        \App\Models\User::factory(10)->create();

        $usuario = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'ivan20cast@gmail.com',
            'status' => 1,
            'department_id' => 11
        ]);

        $usuario->roles()->sync([1]);
    }
}
