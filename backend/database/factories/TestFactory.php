<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;


class TestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Test::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker\Factory::create();
        $questionId = Question::query()->select('id')->get()->random()->id;
        return [
            'name' => $faker->name,
            'question_id' => $questionId,
        ];
    }
}
