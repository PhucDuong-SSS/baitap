<?php

namespace Database\Factories;

use Faker;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker\Factory::create();
        $organizationId = Role::query()->select('id')->get()->random()->id;
        return [
            'role_id' => $organizationId,
            'full_name' => $faker->name,
            'email' =>  $faker->unique()->email,
            'phone' => $faker->phoneNumber,
            'avatar' => 'defautl.png',
            'date_of_birth' => $faker->date,
            'address' => $faker->streetAddress,
            'password' => Hash::make('12345678'),

        ];
    }
}
