<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'name' => 'BAJO',
            'value' => 1,
            'bia_id' => 1
        ]);

        Level::create([
            'name' => 'MEDIO',
            'value' => 2,
            'bia_id' => 1
        ]);

        Level::create([
            'name' => 'ALTO',
            'value' => 3,
            'bia_id' => 1
        ]);
    }
}
