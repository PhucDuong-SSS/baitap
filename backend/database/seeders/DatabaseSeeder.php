<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Result;
use App\Models\Test;
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
        $this->call(RoleSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(TypeSeeder::class);
        User::factory(100)->create();
        Question::factory(100)->create();
        $this->call(AnswerSeeder::class);
        Test::factory(5)->create();
        Result::factory(20)->create();
    }
}
