<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'age'=>$this->faker->randomDigit(3),
            'SystolicBP'=>$this->faker->randomDigit(5),
            'DiastolicBP'=>$this->faker->randomDigit(5),
            'Blood_sugar'=>$this->faker->randomDigit(5),
            'Body_temp'=>$this->faker->randomDigit(3),
            'heartrate'=>$this->faker->randomDigit(4),
            'risk'=>$this->faker->text(10),
        ];
    }
}
