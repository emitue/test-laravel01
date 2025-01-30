<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = \App\Models\User::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(255),
            'gender' => $this->faker->randomNumber(),
            'email' => $this->faker->safeEmail(255),
            'tel' => $this->faker->randomNumber(11),
            'address' => $this->faker->address(255),
            'building' => $this->faker->building(255),
            'detail' => $this->faker->uuid(),

        ];
    }
}
