<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pib'=> strval($this->faker->randomNumber($nbDigits = 5, $strict = false)),
            'name'=> $this->faker->company,
            'address'=> $this->faker->address
        ];
    }
}
