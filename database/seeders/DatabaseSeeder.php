<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin login untuk panel admin
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@pempek.test',
            'password' => 'pempekabdel',
        ]);

        // Akun tambahan untuk development
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(HeroSectionSeeder::class);
        $this->call(StoreInfoSeeder::class);
        $this->call(AdvantageSeeder::class);
    }
}
