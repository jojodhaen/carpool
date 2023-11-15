<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'Joren',
            'last_name' => 'd\'haen',
            'email' => 'joren.dhaen@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
