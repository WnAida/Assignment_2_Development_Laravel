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
            'SystolicBP'=>$this->faker->randomDigit(3),
            'DiastolicBP'=>$this->faker->randomDigit(2),
            'Blood_sugar'=>$this->faker->randomDigit(2),
            'Body_temp'=>$this->faker->randomDigit(2),
            'heartrate'=>$this->faker->randomDigit(3),
            'risk'=>$this->faker->text(5),
        ];
    }
}
