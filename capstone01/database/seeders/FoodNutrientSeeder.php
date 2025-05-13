<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodNutrientSeeder extends Seeder
{
    public function run(): void
    {
        $path = database_path('data/food_nutrient.csv');
        $file = fopen($path, 'r');

        $header = fgetcsv($file); // skip header
        $batchSize = 1000; // kamu bisa naikkan jadi 2000 atau 5000 kalau RAM cukup
        $batch = [];

        DB::beginTransaction(); // ▶️ mulai transaksi
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); // nonaktifkan foreign key check

        try {
            while (($row = fgetcsv($file)) !== false) {
                $batch[] = [
                    'fdc_id' => $row[0],
                    'nutrient_id' => $row[1],
                    'amount' => $row[2],
                    'unit_name' => $row[3],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                if (count($batch) >= $batchSize) {
                    DB::table('food_nutrients')->insert($batch);
                    $batch = [];
                }
            }

            if (!empty($batch)) {
                DB::table('food_nutrients')->insert($batch);
            }

            DB::commit(); // ✅ commit kalau sukses
        } catch (\Exception $e) {
            DB::rollBack(); // ❌ rollback kalau gagal
            throw $e;
        } finally {
            DB::statement('SET FOREIGN_KEY_CHECKS=1'); // aktifkan lagi
            fclose($file);
        }
    }
}
