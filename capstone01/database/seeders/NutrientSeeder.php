<?php

namespace Database\Seeders;


use App\Models\Nutrient; // Ensure the Nutrient model exists in the specified namespace
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


// Ensure the Nutrient model is correctly imported and exists
class NutrientSeeder extends Seeder
{
    public function run(): void
    {
        $path = database_path('data/nutrient.csv');
        $file = fopen($path, 'r');

        $header = fgetcsv($file); // skip header

        while (($row = fgetcsv($file)) !== false) {
            Nutrient::updateOrCreate([
                'id' => $row[0],
            ], [
                'name' => $row[1],
                'unit_name' => $row[2],
            ]);
        }

        fclose($file);
    }
}
