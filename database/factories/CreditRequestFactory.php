<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CreditRequestFactory extends Factory
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
            'period' => $this->faker->numberBetween(12, 60),
            'amount' => $this->faker->numberBetween(5000, 20000),
            'credit_id' => $this->faker->numberBetween(1, 5),
            'client_id' => $this->faker->numberBetween(1, 30)
        ];
    }
}
