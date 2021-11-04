<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'make'=>$this->faker->company(),
            'model'=>$this->faker->word(),
            'year'=>$this->faker->year($max = 'now'),
            'mileage'=>$this->faker->numberBetween($min = 1000, $max = 500000),
            'displacement'=>$this->faker->randomFloat($nbMaxDecimals = 1, $min = 01, $max = 9)
        ];
    }
}
