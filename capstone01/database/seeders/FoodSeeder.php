<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // database/seeders/FoodSeeder.php
    // database/seeders/FoodSeeder.php
    public function run()
    {
        DB::table('foods')->insert([
            [
                'name' => 'Nasi Putih',
                'calories' => 130,
                'protein' => 2.7,
                'carbs' => 28,
                'fat' => 0.3,
                'description' => 'Nasi putih biasa, 100 gram'
            ],
            [
                'name' => 'Ayam Goreng',
                'calories' => 239,
                'protein' => 23,
                'carbs' => 0,
                'fat' => 15,
                'description' => 'Ayam goreng tanpa kulit, 100 gram'
            ],[
                'name' => 'tahu goreng numquan',
                'calories' => 239,
                'protein' => 23,
                'carbs' => 0,
                'fat' => 15,
                'description' => 'Ayam goreng tanpa kulit, 100 gram'
            ],
            [
                'name' => 'kerbau masuk parit',
                'calories' => 239,
                'protein' => 23,
                'carbs' => 0,
                'fat' => 15,
                'description' => 'Ayam goreng tanpa kulit, 100 gram'
            ]
            // Tambahkan data lainnya
        ]);
    }
}
