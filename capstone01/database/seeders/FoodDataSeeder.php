<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class FoodDataSeeder extends Seeder
{
    public function run()
    {
        // Path CSV di folder storage/app/foods/
        $path = storage_path('app/foods/food.csv'); // Ganti sesuai nama file

        if (!file_exists($path)) {
            echo "File tidak ditemukan: $path\n";
            return;
        }

        $handle = fopen($path, 'r');
        $header = fgetcsv($handle); // baris pertama sebagai header

        $count = 0;

        while (($row = fgetcsv($handle)) !== false && $count < 1000) { // batasi dulu 1000 data
            $data = array_combine($header, $row);

            DB::table('foods')->insert([
                'fdc_id' => $data['fdc_id'],
                'description' => $data['description'],
                'data_type' => $data['data_type'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $count++;
        }

        fclose($handle);
        echo "Import selesai: $count baris dimasukkan.\n";
    }
}

