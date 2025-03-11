<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        Category::insert([
            ['name' => 'Books'],
            ['name' => 'Clothing'],
            ['name' => 'Toys & Games'],
            ['name' => 'Furniture'],
            ['name' => 'Electronics'],
            ['name' => 'Kitchenware'],
            ['name' => 'Home Decor'],
         
            ]
        );
    }
}


  