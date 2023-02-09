<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CreditFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rate' => $this->faker->randomFloat(2, 1, 10),
            'name' => $this->faker->catchPhrase,
            'min_period' => $this->faker->numberBetween(1, 10),
            'max_period' => $this->faker->numberBetween(30, 120),
            'min_amount' => $this->faker->numberBetween(2000, 10000),
            'max_amount' => $this->faker->numberBetween(10000, 30000)
        ];
    }
}
