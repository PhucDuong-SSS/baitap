<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Result;
use App\Models\Test;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;

class ResultFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Result::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker\Factory::create();
        $testId = Test::query()->select('id')->get()->random()->id;
        $userId = User::query()->select('id')->get()->random()->id;
        return [
            'test_id' => $testId,
            'user_id' => $userId,
            'mark' => $faker->numberBetween($min = 0, $max = 20),
            'time' => $faker->numberBetween($min = 0, $max = 100),
        ];
    }
}
