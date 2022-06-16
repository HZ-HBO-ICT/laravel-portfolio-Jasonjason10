<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_name'=> $this->faker->name,
            'test_name'=> $this->faker->numberBetween(1,750),
            'lowest_passing_grade'=> $this->faker->numerify(5.5),
            'best_grade'=>$this->faker->numberBetween(5.5,10),
            'passed_at'=>$this->faker->date,
            'EC'=>$this->faker->numberBetween(1, 10),
            'Quartile'=>$this->faker->numberBetween(1,4)
        ];
    }
}
