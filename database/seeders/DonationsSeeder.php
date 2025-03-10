<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
            Donation::insert([
                ['title' => 'Hello Kitty toy', 'year' => 1998, 'rating' => 8.2, 'image' => ''],
                ['title' => 'The Interview', 'year' => 2014, 'rating' => 6.5, 'image' => ''],
                ['title' => 'El Camino', 'year' => 2019, 'rating' => 7.3, 'image' => ''],
                ['title' => 'Bullet Train', 'year' => 2022, 'rating' => 7.3, 'image' => ''],
                ['title' => 'Rush Hour', 'year' => 1998, 'rating' => 7.0, 'image' => ''],
                

                
                ]
            );
    }
}
