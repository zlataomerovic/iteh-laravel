<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobOffer>
 */
class JobOfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'position'=>$this->faker->jobTitle,
            'description'=>$this->faker->realText,
            'available_slots'=>$this->faker->numberBetween($min=3,$max=15),
            'status'=>$this->faker->boolean,
            'company_id'=>$this->faker->numberBetween(1,5),

        ];
    }
}
