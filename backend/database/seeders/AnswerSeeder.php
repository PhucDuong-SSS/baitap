<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker::create();
        $questionId = Question::where('id', '>', 0)->pluck('id');
        foreach ($questionId as $index => $id) {
            foreach (range(1, 4) as $index) {
                DB::table('answers')->insert([
                    'content' => $faker->unique()->name,
                    'question_id' => $id,
                ]);
            }
        }
    }
}
