<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            ['name' => 'Vocabulary', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Grammar', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
