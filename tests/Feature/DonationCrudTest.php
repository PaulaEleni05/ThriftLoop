<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Donation;
use App\Models\Charity;
use App\Models\Category;

class DonationCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_donation_with_status()
    {
    
        $user = User::create(['name' => 'Eleni', 'email' => 'eleni@gmail.com', 'password' => bcrypt('password')]);
        $charity = Charity::create(['name' => 'Charity Name', 'description' => 'Description']);
        $category = Category::create(['name' => 'Category Name']);


        $donation = Donation::create([
            'title' => 'Books',
            'user_id' => $user->id,
            'charity_id' => $charity->id,
            'category_id' => $category->id,
            'description' => 'Books for donation',
            'condition' => 'new',
            'status' => 'pending',
        ]);

        
        $this->assertDatabaseHas('donations', [
            'id' => $donation->id,
            'status' => 'pending',  
        ]);
    }



    public function test_delete_donation()
    {
        $user = User::create(['name' => 'Eleni', 'email' => 'eleni@gmail.com', 'password' => bcrypt('password')]);
        $charity = Charity::create(['name' => 'Charity Name', 'description' => 'Description']);
        $category = Category::create(['name' => 'Category Name']);

      
        $donation = Donation::create([
            'title' => 'Books',
            'user_id' => $user->id,
            'charity_id' => $charity->id,
            'category_id' => $category->id,
            'description' => 'Books for donation',
            'condition' => 'new',
            'status' => 'pending',
        ]);

        $donation->delete();

        $this->assertDatabaseMissing('donations', [
            'id' => $donation->id,
        ]);
    }
}
