<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CU-code'=> $this->faker->numberBetween(1.50),
            'name'=> $this->faker->name,
            'credits'=> $this->faker->numberBetween(1,10),
        ];
    }
}
