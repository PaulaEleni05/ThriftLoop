<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Charity;
use Carbon\Carbon;


class CharitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        Charity::insert([
            ['name' => 'St. Vincent de Paul', 'description' => 'SVP runs numerous shops across Dublin, providing affordable clothing and household items. '],
            ['name' => 'Change Clothes', 'description' => 'A non-profit organization promoting sustainable fashion through clothes swapping and upcycling.'],
            ['name' => 'Oxfam Books ', 'description' => 'Oxfam operates several bookshops in Dublin, specializing in second-hand books.'],
            ['name' => 'Barnardos Charity Shop ', 'description' => 'Barnardos shop offers a range of items, including designer pieces. '],
     

            
            ]
        );
    }
}
