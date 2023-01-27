<?php

namespace Database\Seeders;

use App\Models\Parameter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parameter::create([
            'name' => 'FINACIERO',
            'bia_id' => 1
        ]);

        Parameter::create([
            'name' => 'REPUTACIONAL',
            'bia_id' => 1
        ]);

        Parameter::create([
            'name' => 'LEGAL',
            'bia_id' => 1
        ]);

        Parameter::create([
            'name' => 'CONTRACTUAL',
            'bia_id' => 1
        ]);

        Parameter::create([
            'name' => 'SALUD/AMBIENTAL',
            'bia_id' => 1
        ]);


        //BIA 2
        Parameter::create([
            'name' => 'FINACIERO',
            'bia_id' => 2
        ]);

        Parameter::create([
            'name' => 'REPUTACIONAL',
            'bia_id' => 2
        ]);

        Parameter::create([
            'name' => 'LEGAL',
            'bia_id' => 2
        ]);

        Parameter::create([
            'name' => 'CONTRACTUAL',
            'bia_id' => 2
        ]);

        Parameter::create([
            'name' => 'SALUD/AMBIENTAL',
            'bia_id' => 2
        ]);
    }
}
