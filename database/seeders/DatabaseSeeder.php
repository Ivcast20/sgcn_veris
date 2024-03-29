<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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
        
        $usuariocod2 = User::create([
            'name' => 'Pablo',
            'last_name' => 'Arevalo',
            'cargo' => 'Chief Data Officer',
            'email' => 'pablo.arevalo@example.com' /**veris.com.ec */,
            'status' => 1,
            'password' => bcrypt(env('PASS_SYS','Veris202x-')),
            'department_id' => 1
        ]);

        $usuariocod2->roles()->sync([3]);

        $usuariocod3 = User::create([
            'name' => 'Carol',
            'last_name' => 'Zambrano',
            'cargo' => 'Vicepresidente Financiera',
            'email' => 'carol.zambrano@example.com' /**veris.com.ec */,
            'status' => 1,
            'password' => bcrypt(env('PASS_SYS','Veris202x-')),
            'department_id' => 2
        ]);

        $usuariocod3->roles()->sync([3,4]);

        $usuariocod4 = User::create([
            'name' => 'Fausto',
            'last_name' => 'Gavilanes',
            'cargo' => 'Jefe Nacional de Control Interno',
            'email' => 'fausto.gavilanes@example.com' /**veris.com.ec */,
            'status' => 1,
            'password' => bcrypt(env('PASS_SYS','Veris202x-')),
            'department_id' => 3
        ]);

        $usuariocod4->roles()->sync([3,4]);

        $usuariocod5 = User::create([
            'name' => 'Melissa',
            'last_name' => 'Santoro',
            'cargo' => 'Gerente de Customer Experience',
            'email' => 'melissa.santoro@example.com' /**veris.com.ec */,
            'status' => 1,
            'password' => bcrypt(env('PASS_SYS','Veris202x-')),
            'department_id' => 4
        ]);

        $usuariocod5->roles()->sync([3,4]);

        $usuariocod6 = User::create([
            'name' => 'Michelle',
            'last_name' => 'Benites',
            'cargo' => 'Gerente Marketing',
            'email' => 'michelle.benites@example.com' /**veris.com.ec */,
            'status' => 1,
            'password' => bcrypt(env('PASS_SYS','Veris202x-')),
            'department_id' => 5
        ]);

        $usuariocod6->roles()->sync([3]);

        $usuariocod7 = User::create([
            'name' => 'Yenny Alexandra',
            'last_name' => 'Mejía Osorio',
            'cargo' => 'Vicepresidente de Gestión y Operaciones',
            'email' => 'yenny.mejia@example.com' /**veris.com.ec */,
            'status' => 1,
            'password' => bcrypt(env('PASS_SYS','Veris202x-')),
            'department_id' => 6
        ]);

        $usuariocod7->roles()->sync([3]);

        $usuariocod8 = User::create([
            'name' => 'Alfredo',
            'last_name' => 'Medina',
            'cargo' => 'Gerente de Operaciones',
            'email' => 'alfredo.medina@example.com' /**veris.com.ec */,
            'status' => 1,
            'password' => bcrypt(env('PASS_SYS','Veris202x-')),
            'department_id' => 7
        ]);

        $usuariocod8->roles()->sync([3]);

        $usuariocod9 = User::create([
            'name' => 'Diego',
            'last_name' => 'Vera',
            'cargo' => 'Vicepresidente de Ventas',
            'email' => 'diego.vera@example.com' /**veris.com.ec */,
            'status' => 1,
            'password' => bcrypt(env('PASS_SYS','Veris202x-')),
            'department_id' => 8
        ]);

        $usuariocod9->roles()->sync([3]);

        $usuariocod10 = User::create([
            'name' => 'Doris',
            'last_name' => 'Oyos',
            'cargo' => 'Gerente Central médica Virtual',
            'email' => 'doris.oyos@example.com' /**veris.com.ec */,
            'status' => 1,
            'password' => bcrypt(env('PASS_SYS','Veris202x-')),
            'department_id' => 9
        ]);

        $usuariocod10->roles()->sync([3]);

        $usuariocod11 = User::create([
            'name' => 'Elizabeth',
            'last_name' => 'Santos',
            'cargo' => 'Vp Gestion Humana',
            'email' => 'elizabeth.santos@example.com' /**veris.com.ec */,
            'status' => 1,
            'password' => bcrypt(env('PASS_SYS','Veris202x-')),
            'department_id' => 10
        ]);

        $usuariocod11->roles()->sync([3]);

        $usuariocod12 = User::create([
            'name' => 'Franklin',
            'last_name' => 'Rosero',
            'cargo' => 'Vp Tecnología',
            'email' => 'franklin.rosero@example.com' /**veris.com.ec */,
            'status' => 1,
            'password' => bcrypt(env('PASS_SYS','Veris202x-')),
            'department_id' => 11
        ]);

        $usuariocod12->roles()->sync([3]);

        $usuariocod1 = User::create([
            'name' => 'Ivan Francisco',
            'last_name' => 'Castro Abad',
            'cargo' => 'Desarrollador',
            'email' => 'ivan20cast@gmail.com',
            'status' => 1,
            'password' => bcrypt(env('PASS_SYS','Veris202x-')),
            'department_id' => 11
        ]);

        $usuariocod1->roles()->sync([1]);

        // $usuariocod13 = User::create([
        //     'name' => 'Ivan Prueba',
        //     'last_name' => 'Castro Prueba',
        //     'cargo' => 'Desarrollador',
        //     'email' => 'ivanuees@gmail.com',
        //     'status' => 1,
        //     'password' => bcrypt(env('PASS_SYS','Veris202x-')),
        //     'department_id' => 11
        // ]);

        // $usuariocod13->roles()->sync([4]);

        $this->call(RespuestasBia::class);
        $this->call(SourceSeeder::class);
        $this->call(TreatmentOptionSeeder::class);
        $this->call(ImpactLevelSeeder::class);
        $this->call(ProbabilityLevelSeeder::class);
        $this->call(RiskLevelSeeder::class);
        $this->call(CauseSeeder::class);
        $this->call(StatusRiskSeeder::class);

    }
}
