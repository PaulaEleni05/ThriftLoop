<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Charity;
use Carbon\Carbon;




class CharityCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $currentTimestamp = Carbon::now();
         // Attach categories to charities
         $charityA = Charity::find(1);  // St. Vincent de Paul
         $charityB = Charity::find(2);  // Change Clothes
         
 
         // Example of attaching categories to charities
         $charityA->categories()->attach([1, 2, 3]); // Associated with Books, Clothing, Toys & Games
         $charityB->categories()->attach([2, 4, 5]); // Associated with Clothing, Furniture, Electronics
    }
}


