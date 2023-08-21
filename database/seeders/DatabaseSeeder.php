<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\FacebookData;
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
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // placeholder row
        FacebookData::create([
            'token' => '',
        ]);

        $this->call(PostSeeder::class);
        $this->call(SponsorSeeder::class);
        $this->call(MessageSeeder::class);
    }
}
