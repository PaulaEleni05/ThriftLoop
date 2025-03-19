<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;
use Carbon\Carbon;


class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            [
                'address' => 'Svp House, Sean Macdermott Street Lower, Mountjoy, Dublin 1, D01 WV38, Ireland', 
                'latitude' =>  53.3520,
                'longitude' => -6.2670,
                'charity_id' => 1 
            ],
            [
                'address' => '10-13, Thomas St, The Liberties, Dublin, D08 PX8H, Ireland', 
                'latitude' =>53.3432,
                'longitude' => -6.2832,
                'charity_id' => 2 

            ],
            [
                'address' => '67 Phibsborough Rd, Cabra East, Dublin, D07 EP02, Ireland', 
                'latitude' => 53.3600,
                'longitude' => -6.2770,
                'charity_id' => 3 
            ],
            [
                'address' => '7 Main St, Clondalkin, Dublin 22, D22 A4T8, Ireland', 
                'latitude' =>  53.3250,
                'longitude' => -6.4520,
                'charity_id' => 4
            ]
        ];


        // Looping through the locations and insert them into the database
        foreach ($locations as $location) {
            Location::create($location); // Inserting each location
        }
    }
}
