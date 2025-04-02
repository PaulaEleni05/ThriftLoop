<?php


namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Donation;
use App\Models\User; 
use App\Models\Charity;
use App\Models\Category;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donation>
 */
class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,  
            'user_id' => User::factory(),  
            'charity_id' => Charity::factory(), 
            'category_id' => Category::factory(), 
            'description' => $this->faker->text, 
            'condition' => $this->faker->randomElement(['new', 'used', 'poor']),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}
