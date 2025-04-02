<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Donation;
use App\Models\User;
use App\Models\Charity;
use App\Models\Category;
use Carbon\Carbon;


class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $user = User::first();   
        $user = User::create(['name' => 'Eleni', 'email' => 'eleni@gmail.com', 'password' => bcrypt('password')]); // made this user to be able to create the donation records.
        $charity = Charity::first();  
        $category = Category::first();  

        // Create donation records
        Donation::create([
            'title' => 'Books',
            'user_id' => $user->id,  
            'charity_id' => $charity->id, 
            'category_id' => $category->id,  
            'description' => 'A collection of books to donate to charity.',
            'condition' => 'new',
            'status' => 'pending',
        ]);

        Donation::create([
            'title' => 'Clothing',
            'user_id' => $user->id,
            'charity_id' => $charity->id,
            'category_id' => $category->id,
            'description' => 'A donation of clothing to help those in need.',
            'condition' => 'used',
            'status' => 'approved',
        ]);

        Donation::create([
            'title' => 'Toys',
            'user_id' => $user->id,
            'charity_id' => $charity->id,
            'category_id' => $category->id,
            'description' => 'A donation of toys for children in need.',
            'condition' => 'used',
            'status' => 'approved',
        ]);


        Donation::create([
            'title' => 'Electronics',
            'user_id' => $user->id,
            'charity_id' => $charity->id,
            'category_id' => $category->id,
            'description' => 'A electronics for people who need it.',
            'condition' => 'used',
            'status' => 'pending',
        ]);


        Donation::create([
            'title' => 'Home Decor',
            'user_id' => $user->id,
            'charity_id' => $charity->id,
            'category_id' => $category->id,
            'description' => 'A electronics for people who need it.',
            'condition' => 'used',
            'status' => 'rejected',
        ]);


        
        Donation::create([
            'title' => 'Furniture',
            'user_id' => $user->id,
            'charity_id' => $charity->id,
            'category_id' => $category->id,
            'description' => 'A electronics for people who need it.',
            'condition' => 'poor',
            'status' => 'pending',
        ]);
    }
}
