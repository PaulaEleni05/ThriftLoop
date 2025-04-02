<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Charity;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Charity>
 */
class CharityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,  
            'description' => $this->faker->sentence,  
        ];

    }
}
