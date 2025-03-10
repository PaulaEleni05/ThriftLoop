<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admmin User',
            'email' => 'admin' . time() . '@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
    }
}
