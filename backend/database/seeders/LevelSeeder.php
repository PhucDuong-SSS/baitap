<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            ['name' => 'N1', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'N2', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'N3', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'N4', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'N5', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
