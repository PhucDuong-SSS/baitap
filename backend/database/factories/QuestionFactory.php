<?php

namespace Database\Factories;

use App\Models\Level;
use App\Models\Question;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;


class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker\Factory::create();
        $levelId = Level::query()->select('id')->get()->random()->id;
        $typeId = Type::query()->select('id')->get()->random()->id;
        return [
            'level_id' => $levelId,
            'type_id' => $typeId,
            'title' => $faker->name,
            'right_answer' =>   $faker->randomElement([1, 2, 3, 4]),
        ];
    }
}
