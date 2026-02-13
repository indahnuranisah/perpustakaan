<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Data bawaan untuk User
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // --- GABUNGKAN KODE DI BAWAH INI ---
        $this->call([
            CategorySeeder::class,
            BookSeeder::class,
        ]);
        // ----------------------------------
    }
}