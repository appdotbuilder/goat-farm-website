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
        // Create admin user
        User::factory()->create([
            'name' => 'Farm Administrator',
            'email' => 'admin@greenvalleygoats.com',
        ]);

        // Seed sample data
        $this->call([
            PageSeeder::class,
            ProductSeeder::class,
            TestimonialSeeder::class,
        ]);
    }
}
