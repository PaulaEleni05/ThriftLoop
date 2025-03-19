<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CharitySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CharityCategorySeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(DonationSeeder::class);
        $this->call(ImageSeeder::class);






        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
