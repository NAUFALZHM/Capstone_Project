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
        // Hindari duplikat user dengan pengecekan
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            ['name' => 'Test User', 'password' => bcrypt('password')]
        );

        // Panggil seeder untuk data makanan dan nutrisi
        // $this->call([
        //     NutrientSeeder::class,
        //     FoodDataSeeder::class,
        //     FoodNutrientSeeder::class,
        // ]);
    }

}
