<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobApplication>
 */
class JobApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'motivation_letter'=>$this->faker->text,
            'job_offer_id'=>$this->faker->numberBetween(1,15),
            'applicant_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
