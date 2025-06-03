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
            ],
            [
                'name' => 'Tempe Goreng',
                'calories' => 200,
                'protein' => 19,
                'carbs' => 9,
                'fat' => 11,
                'description' => 'Tempe goreng, 100 gram'
            ],
            [
                "name" => "Bubur Ayam",
                "calories" => 150,
                "protein" => 6,
                "carbs" => 20,
                "fat" => 5,
                "description" => "Bubur ayam biasa, 100 gram"
            ],
            [
                "name" => "Sate Ayam",
                "calories" => 250,
                "protein" => 25,
                "carbs" => 5,
                "fat" => 15,
                "description" => "Sate ayam dengan bumbu kacang, 100 gram"
            ],
            [
                "name" => "Rendang Daging Sapi",
                "calories" => 300,
                "protein" => 20,
                "carbs" => 5,
                "fat" => 20,
                "description" => "Rendang daging sapi, 100 gram"
            ],
            [
                "name" => "Beras Merah",
                "calories" => 123,
                "protein" => 2.7,
                "carbs" => 26,
                "fat" => 0.9,
                "description" => "Beras merah mentah, 100 gram"
            ],
            [
                "name" => "Daging Sapi",
                "calories" => 250,
                "protein" => 26,
                "carbs" => 0,
                "fat" => 17,
                "description" => "Daging sapi tanpa lemak, mentah, 100 gram"
            ],
            [
                "name" => "Ayam Dada",
                "calories" => 165,
                "protein" => 31,
                "carbs" => 0,
                "fat" => 3.6,
                "description" => "Dada ayam tanpa kulit, mentah, 100 gram"
            ],
            [
                "name" => "Ikan Salmon",
                "calories" => 206,
                "protein" => 22,
                "carbs" => 0,
                "fat" => 13,
                "description" => "Fillet salmon mentah, 100 gram"
            ],
            [
                "name" => "Ikan Tongkol",
                "calories" => 109,
                "protein" => 24,
                "carbs" => 0,
                "fat" => 1,
                "description" => "Ikan tongkol mentah, 100 gram"
            ],
            [
                "name" => "Telur Ayam",
                "calories" => 140,
                "protein" => 12,
                "carbs" => 1,
                "fat" => 10,
                "description" => "Telur ayam mentah, 100 gram"
            ],
            [
                "name" => "Tahu",
                "calories" => 76,
                "protein" => 8,
                "carbs" => 1.9,
                "fat" => 4.8,
                "description" => "Tahu mentah, 100 gram"
            ],
            [
                "name" => "Tempe",
                "calories" => 193,
                "protein" => 19,
                "carbs" => 9,
                "fat" => 11,
                "description" => "Tempe mentah, 100 gram"
            ],
            [
                "name" => "Kacang Tanah",
                "calories" => 567,
                "protein" => 26,
                "carbs" => 16,
                "fat" => 49,
                "description" => "Kacang tanah mentah, 100 gram"
            ],
            [
                "name" => "Kacang Hijau",
                "calories" => 347,
                "protein" => 24,
                "carbs" => 63,
                "fat" => 1.2,
                "description" => "Kacang hijau kering, 100 gram"
            ],
            [
                "name" => "Kacang Merah",
                "calories" => 333,
                "protein" => 24,
                "carbs" => 60,
                "fat" => 1.1,
                "description" => "Kacang merah kering, 100 gram"
            ],
            [
                "name" => "Bayam",
                "calories" => 23,
                "protein" => 2.9,
                "carbs" => 3.6,
                "fat" => 0.4,
                "description" => "Bayam segar, 100 gram"
            ],
            [
                "name" => "Kolplay",
                "calories" => 25,
                "protein" => 1.3,
                "carbs" => 5,
                "fat" => 0.2,
                "description" => "Kolplay segar, 100 gram"
            ],
            [
                "name" => "Wortel",
                "calories" => 41,
                "protein" => 0.9,
                "carbs" => 9.6,
                "fat" => 0.2,
                "description" => "Wortel segar, 100 gram"
            ],
            [
                "name" => "Brokoli",
                "calories" => 35,
                "protein" => 2.8,
                "carbs" => 7,
                "fat" => 0.4,
                "description" => "Brokoli segar, 100 gram"
            ],
            [
                "name" => "Kangkung",
                "calories" => 19,
                "protein" => 2.6,
                "carbs" => 3.1,
                "fat" => 0.2,
                "description" => "Kangkung segar, 100 gram"
            ],
            [
                "name" => "Kacang Panjang",
                "calories" => 47,
                "protein" => 2.8,
                "carbs" => 8.3,
                "fat" => 0.4,
                "description" => "Kacang panjang segar, 100 gram"
            ],
            [
                "name" => "Terong",
                "calories" => 25,
                "protein" => 1,
                "carbs" => 6,
                "fat" => 0.2,
                "description" => "Terong segar, 100 gram"
            ],
            [
                "name" => "Tomat",
                "calories" => 18,
                "protein" => 0.9,
                "carbs" => 3.9,
                "fat" => 0.2,
                "description" => "Tomat segar, 100 gram"
            ],
            [
                "name" => "Kentang",
                "calories" => 77,
                "protein" => 2,
                "carbs" => 17,
                "fat" => 0.1,
                "description" => "Kentang mentah, 100 gram"
            ],
            [
                "name" => "Ubi Jalar",
                "calories" => 86,
                "protein" => 1.6,
                "carbs" => 20,
                "fat" => 0.1,
                "description" => "Ubi jalar mentah, 100 gram"
            ],
            [
                "name" => "Jagung",
                "calories" => 86,
                "protein" => 3.2,
                "carbs" => 19,
                "fat" => 1.2,
                "description" => "Jagung segar, 100 gram"
            ],
            [
                "name" => "Pisang",
                "calories" => 89,
                "protein" => 1.1,
                "carbs" => 23,
                "fat" => 0.3,
                "description" => "Pisang segar, 100 gram"
            ],
            [
                "name" => "Apel",
                "calories" => 52,
                "protein" => 0.3,
                "carbs" => 14,
                "fat" => 0.2,
                "description" => "Apel segar, 100 gram"
            ],
            [
                "name" => "Mangga",
                "calories" => 60,
                "protein" => 0.8,
                "carbs" => 15,
                "fat" => 0.4,
                "description" => "Mangga segar, 100 gram"
            ],
            [
                "name" => "Jeruk",
                "calories" => 47,
                "protein" => 0.9,
                "carbs" => 12,
                "fat" => 0.1,
                "description" => "Jeruk segar, 100 gram"
            ],
            [
                "name" => "Alpukat",
                "calories" => 160,
                "protein" => 2,
                "carbs" => 9,
                "fat" => 15,
                "description" => "Alpukat segar, 100 gram"
            ],
            [
                "name" => "Kedelai",
                "calories" => 446,
                "protein" => 36,
                "carbs" => 30,
                "fat" => 20,
                "description" => "Kedelai kering, 100 gram"
            ],
            [
                "name" => "Santan",
                "calories" => 230,
                "protein" => 2.3,
                "carbs" => 6,
                "fat" => 24,
                "description" => "Santan kelapa segar, 100 ml"
            ],
            [
                "name" => "Minyak Kelapa",
                "calories" => 892,
                "protein" => 0,
                "carbs" => 0,
                "fat" => 100,
                "description" => "Minyak kelapa murni, 100 ml"
            ],
            [
                "name" => "Bawang Merah",
                "calories" => 40,
                "protein" => 1.1,
                "carbs" => 9,
                "fat" => 0.1,
                "description" => "Bawang merah segar, 100 gram"
            ],
            [
                "name" => "Bawang Putih",
                "calories" => 149,
                "protein" => 6.4,
                "carbs" => 33,
                "fat" => 0.5,
                "description" => "Bawang putih segar, 100 gram"
            ],
            [
                "name" => "Cabai Merah",
                "calories" => 40,
                "protein" => 1.9,
                "carbs" => 9,
                "fat" => 0.4,
                "description" => "Cabai merah segar, 100 gram"
            ],
            [
                "name" => "Jahe",
                "calories" => 80,
                "protein" => 1.8,
                "carbs" => 18,
                "fat" => 0.8,
                "description" => "Jahe segar, 100 gram"
            ],
            [
                "name" => "Kunyit",
                "calories" => 312,
                "protein" => 9.7,
                "carbs" => 67,
                "fat" => 3.3,
                "description" => "Kunyit bubuk, 100 gram"
            ],
            [
                "name" => "Daun Singkong",
                "calories" => 37,
                "protein" => 3.7,
                "carbs" => 7,
                "fat" => 0.4,
                "description" => "Daun singkong segar, 100 gram"
            ],
            [
                "name" => "Kubis",
                "calories" => 25,
                "protein" => 1.3,
                "carbs" => 6,
                "fat" => 0.1,
                "description" => "Kubis segar, 100 gram"
            ],
            [
                "name" => "Timun",
                "calories" => 15,
                "protein" => 0.7,
                "carbs" => 3.6,
                "fat" => 0.1,
                "description" => "Timun segar, 100 gram"
            ],
            [
                "name" => "Jambu Biji",
                "calories" => 68,
                "protein" => 2.6,
                "carbs" => 14,
                "fat" => 1,
                "description" => "Jambu biji segar, 100 gram"
            ],
            [
                "name" => "Nanas",
                "calories" => 50,
                "protein" => 0.5,
                "carbs" => 13,
                "fat" => 0.1,
                "description" => "Nanas segar, 100 gram"
            ],
            [
                "name" => "Quinoa",
                "calories" => 368,
                "protein" => 14,
                "carbs" => 64,
                "fat" => 6,
                "description" => "Quinoa mentah, 100 gram"
            ],
            [
                "name" => "Daging Kambing",
                "calories" => 143,
                "protein" => 20,
                "carbs" => 0,
                "fat" => 7,
                "description" => "Daging kambing tanpa lemak, mentah, 100 gram"
            ],
            [
                "name" => "Ayam Paha",
                "calories" => 209,
                "protein" => 19,
                "carbs" => 0,
                "fat" => 15,
                "description" => "Paha ayam tanpa kulit, mentah, 100 gram"
            ],
            [
                "name" => "Ikan Kakap",
                "calories" => 100,
                "protein" => 20,
                "carbs" => 0,
                "fat" => 1.5,
                "description" => "Fillet ikan kakap mentah, 100 gram"
            ],
            [
                "name" => "Ikan Sarden",
                "calories" => 208,
                "protein" => 25,
                "carbs" => 0,
                "fat" => 11,
                "description" => "Ikan sarden mentah, 100 gram"
            ],
            [
                "name" => "Udang",
                "calories" => 99,
                "protein" => 21,
                "carbs" => 0.2,
                "fat" => 1,
                "description" => "Udang segar, mentah, 100 gram"
            ],
            [
                "name" => "Kacang Almond",
                "calories" => 579,
                "protein" => 21,
                "carbs" => 22,
                "fat" => 50,
                "description" => "Almond mentah, 100 gram"
            ],
            [
                "name" => "Kacang Mete",
                "calories" => 553,
                "protein" => 18,
                "carbs" => 30,
                "fat" => 44,
                "description" => "Kacang mete mentah, 100 gram"
            ],
            [
                "name" => "Lentil",
                "calories" => 352,
                "protein" => 25,
                "carbs" => 63,
                "fat" => 1,
                "description" => "Lentil kering, 100 gram"
            ],
            [
                "name" => "Kacang Kedelai Hitam",
                "calories" => 416,
                "protein" => 35,
                "carbs" => 30,
                "fat" => 20,
                "description" => "Kedelai hitam kering, 100 gram"
            ],
            [
                "name" => "Kembang Kol",
                "calories" => 25,
                "protein" => 1.9,
                "carbs" => 5,
                "fat" => 0.3,
                "description" => "Kembang kol segar, 100 gram"
            ],
            [
                "name" => "Sawi Hijau",
                "calories" => 27,
                "protein" => 2.5,
                "carbs" => 4.7,
                "fat" => 0.2,
                "description" => "Sawi hijau segar, 100 gram"
            ],
            [
                "name" => "Selada",
                "calories" => 15,
                "protein" => 1.4,
                "carbs" => 2.9,
                "fat" => 0.2,
                "description" => "Selada segar, 100 gram"
            ],
            [
                "name" => "Labu Siam",
                "calories" => 19,
                "protein" => 0.8,
                "carbs" => 4.5,
                "fat" => 0.1,
                "description" => "Labu siam segar, 100 gram"
            ],
            [
                "name" => "Paprika Merah",
                "calories" => 31,
                "protein" => 1,
                "carbs" => 6,
                "fat" => 0.2,
                "description" => "Paprika merah segar, 100 gram"
            ],
            [
                "name" => "Zukini",
                "calories" => 17,
                "protein" => 1.2,
                "carbs" => 3.1,
                "fat" => 0.3,
                "description" => "Zukini segar, 100 gram"
            ],
            [
                "name" => "Buncis",
                "calories" => 31,
                "protein" => 1.8,
                "carbs" => 7,
                "fat" => 0.2,
                "description" => "Buncis segar, 100 gram"
            ],
            [
                "name" => "Jamur Shitake",
                "calories" => 34,
                "protein" => 2.2,
                "carbs" => 6.8,
                "fat" => 0.5,
                "description" => "Jamur shitake segar, 100 gram"
            ],
            [
                "name" => "Singkong",
                "calories" => 160,
                "protein" => 1.4,
                "carbs" => 38,
                "fat" => 0.3,
                "description" => "Singkong mentah, 100 gram"
            ],
            [
                "name" => "Talas",
                "calories" => 112,
                "protein" => 1.5,
                "carbs" => 26,
                "fat" => 0.2,
                "description" => "Talas mentah, 100 gram"
            ],
            [
                "name" => "Semangka",
                "calories" => 30,
                "protein" => 0.6,
                "carbs" => 7.5,
                "fat" => 0.2,
                "description" => "Semangka segar, 100 gram"
            ],
            [
                "name" => "Melon",
                "calories" => 34,
                "protein" => 0.8,
                "carbs" => 8.2,
                "fat" => 0.2,
                "description" => "Melon segar, 100 gram"
            ],
            [
                "name" => "Anggur",
                "calories" => 69,
                "protein" => 0.7,
                "carbs" => 18,
                "fat" => 0.2,
                "description" => "Anggur segar, 100 gram"
            ],
            [
                "name" => "Pepaya",
                "calories" => 43,
                "protein" => 0.5,
                "carbs" => 11,
                "fat" => 0.3,
                "description" => "Pepaya segar, 100 gram"
            ],
            [
                "name" => "Kiwi",
                "calories" => 61,
                "protein" => 1.1,
                "carbs" => 15,
                "fat" => 0.5,
                "description" => "Kiwi segar, 100 gram"
            ],
            [
                "name" => "Stroberi",
                "calories" => 32,
                "protein" => 0.7,
                "carbs" => 7.7,
                "fat" => 0.3,
                "description" => "Stroberi segar, 100 gram"
            ],
            [
                "name" => "Belimbing",
                "calories" => 31,
                "protein" => 1,
                "carbs" => 6.7,
                "fat" => 0.3,
                "description" => "Belimbing segar, 100 gram"
            ],
            [
                "name" => "Durian",
                "calories" => 147,
                "protein" => 1.5,
                "carbs" => 27,
                "fat" => 5.3,
                "description" => "Daging durian segar, 100 gram"
            ],
            [
                "name" => "Lengkeng",
                "calories" => 60,
                "protein" => 1.3,
                "carbs" => 15,
                "fat" => 0.1,
                "description" => "Lengkeng segar, 100 gram"
            ],
            [
                "name" => "Rambutan",
                "calories" => 82,
                "protein" => 0.7,
                "carbs" => 20,
                "fat" => 0.2,
                "description" => "Rambutan segar, 100 gram"
            ],
            [
                "name" => "Minyak Zaitun",
                "calories" => 884,
                "protein" => 0,
                "carbs" => 0,
                "fat" => 100,
                "description" => "Minyak zaitun murni, 100 ml"
            ],
            [
                "name" => "Susu Almond",
                "calories" => 15,
                "protein" => 0.4,
                "carbs" => 0.6,
                "fat" => 1.1,
                "description" => "Susu almond tanpa gula, 100 ml"
            ],
            [
                "name" => "Kemiri",
                "calories" => 629,
                "protein" => 14,
                "carbs" => 17,
                "fat" => 60,
                "description" => "Kemiri mentah, 100 gram"
            ],
            [
                "name" => "Lada Hitam",
                "calories" => 251,
                "protein" => 10,
                "carbs" => 64,
                "fat" => 3.3,
                "description" => "Lada hitam bubuk, 100 gram"
            ],
            [
                "name" => "Kencur",
                "calories" => 79,
                "protein" => 2,
                "carbs" => 18,
                "fat" => 0.7,
                "description" => "Kencur segar, 100 gram"
            ],
            [
                "name" => "Daun Kemangi",
                "calories" => 22,
                "protein" => 3.2,
                "carbs" => 2.7,
                "fat" => 0.6,
                "description" => "Daun kemangi segar, 100 gram"
            ],
            [
                "name" => "Daun Bawang",
                "calories" => 31,
                "protein" => 1.8,
                "carbs" => 7,
                "fat" => 0.2,
                "description" => "Daun bawang segar, 100 gram"
            ],
            [
                "name" => "Seledri",
                "calories" => 16,
                "protein" => 0.7,
                "carbs" => 3,
                "fat" => 0.2,
                "description" => "Seledri segar, 100 gram"
            ],
            [
                "name" => "Biji Wijen",
                "calories" => 573,
                "protein" => 18,
                "carbs" => 23,
                "fat" => 50,
                "description" => "Biji wijen mentah, 100 gram"
            ],
            [
                "name" => "Biji Chia",
                "calories" => 486,
                "protein" => 17,
                "carbs" => 42,
                "fat" => 31,
                "description" => "Biji chia kering, 100 gram"
            ],
            [
                "name" => "Beras Hitam",
                "calories" => 356,
                "protein" => 8.9,
                "carbs" => 76,
                "fat" => 3.2,
                "description" => "Beras hitam mentah, 100 gram"
            ],
            [
                "name" => "Daging Babi",
                "calories" => 242,
                "protein" => 21,
                "carbs" => 0,
                "fat" => 18,
                "description" => "Daging babi tanpa lemak, mentah, 100 gram"
            ],
            [
                "name" => "Ayam Sayap",
                "calories" => 191,
                "protein" => 17,
                "carbs" => 0,
                "fat" => 14,
                "description" => "Sayap ayam tanpa kulit, mentah, 100 gram"
            ],
            [
                "name" => "Ikan Lele",
                "calories" => 119,
                "protein" => 17,
                "carbs" => 0,
                "fat" => 5,
                "description" => "Fillet ikan lele mentah, 100 gram"
            ],
            [
                "name" => "Ikan Teri",
                "calories" => 131,
                "protein" => 20,
                "carbs" => 0,
                "fat" => 5,
                "description" => "Ikan teri segar, mentah, 100 gram"
            ],
            [
                "name" => "Cumi-Cumi",
                "calories" => 92,
                "protein" => 16,
                "carbs" => 3,
                "fat" => 1.4,
                "description" => "Cumi-cumi segar, mentah, 100 gram"
            ],
            [
                "name" => "Kacang Pistachio",
                "calories" => 560,
                "protein" => 20,
                "carbs" => 28,
                "fat" => 45,
                "description" => "Pistachio mentah, 100 gram"
            ],
            [
                "name" => "Kacang Kenari",
                "calories" => 654,
                "protein" => 15,
                "carbs" => 14,
                "fat" => 65,
                "description" => "Kacang kenari mentah, 100 gram"
            ],
            [
                "name" => "Biji Labu",
                "calories" => 559,
                "protein" => 30,
                "carbs" => 11,
                "fat" => 49,
                "description" => "Biji labu kering, 100 gram"
            ],
            [
                "name" => "Kacang Polong",
                "calories" => 81,
                "protein" => 5.4,
                "carbs" => 14,
                "fat" => 0.4,
                "description" => "Kacang polong segar, 100 gram"
            ],
            [
                "name" => "Okra",
                "calories" => 33,
                "protein" => 1.9,
                "carbs" => 7,
                "fat" => 0.2,
                "description" => "Okra segar, 100 gram"
            ],
            [
                "name" => "Daun Kol",
                "calories" => 25,
                "protein" => 1.3,
                "carbs" => 5.8,
                "fat" => 0.1,
                "description" => "Daun kol segar, 100 gram"
            ],
            [
                "name" => "Pakcoy",
                "calories" => 13,
                "protein" => 1.5,
                "carbs" => 2.2,
                "fat" => 0.2,
                "description" => "Pakcoy segar, 100 gram"
            ],
            [
                "name" => "Jamur Tiram",
                "calories" => 33,
                "protein" => 3.3,
                "carbs" => 6,
                "fat" => 0.4,
                "description" => "Jamur tiram segar, 100 gram"
            ],
            [
                "name" => "Kubis Ungu",
                "calories" => 31,
                "protein" => 1.4,
                "carbs" => 7,
                "fat" => 0.1,
                "description" => "Kubis ungu segar, 100 gram"
            ],
            [
                "name" => "Lobak",
                "calories" => 16,
                "protein" => 0.7,
                "carbs" => 3.4,
                "fat" => 0.1,
                "description" => "Lobak segar, 100 gram"
            ],
            [
                "name" => "Kacang Buncis",
                "calories" => 31,
                "protein" => 1.8,
                "carbs" => 7,
                "fat" => 0.2,
                "description" => "Kacang buncis segar, 100 gram"
            ],
            [
                "name" => "Asparagus",
                "calories" => 20,
                "protein" => 2.2,
                "carbs" => 3.9,
                "fat" => 0.1,
                "description" => "Asparagus segar, 100 gram"
            ],
            [
                "name" => "Sorgum",
                "calories" => 339,
                "protein" => 11,
                "carbs" => 75,
                "fat" => 3.3,
                "description" => "Sorgum mentah, 100 gram"
            ],
            [
                "name" => "Ubi Ungu",
                "calories" => 86,
                "protein" => 1.6,
                "carbs" => 20,
                "fat" => 0.1,
                "description" => "Ubi ungu mentah, 100 gram"
            ],
            [
                "name" => "Manggis",
                "calories" => 73,
                "protein" => 0.6,
                "carbs" => 18,
                "fat" => 0.6,
                "description" => "Manggis segar, 100 gram"
            ],
            [
                "name" => "Salak",
                "calories" => 77,
                "protein" => 0.4,
                "carbs" => 20,
                "fat" => 0.1,
                "description" => "Salak segar, 100 gram"
            ],
            [
                "name" => "Sirsak",
                "calories" => 66,
                "protein" => 1,
                "carbs" => 17,
                "fat" => 0.3,
                "description" => "Sirsak segar, 100 gram"
            ],
            [
                "name" => "Kelengkeng",
                "calories" => 60,
                "protein" => 1.3,
                "carbs" => 15,
                "fat" => 0.1,
                "description" => "Kelengkeng segar, 100 gram"
            ],
            [
                "name" => "Markisa",
                "calories" => 97,
                "protein" => 2.2,
                "carbs" => 23,
                "fat" => 0.7,
                "description" => "Markisa segar, 100 gram"
            ],
            [
                "name" => "Blueberry",
                "calories" => 57,
                "protein" => 0.7,
                "carbs" => 14,
                "fat" => 0.3,
                "description" => "Blueberry segar, 100 gram"
            ],
            [
                "name" => "Nangka",
                "calories" => 95,
                "protein" => 1.7,
                "carbs" => 23,
                "fat" => 0.6,
                "description" => "Nangka segar, 100 gram"
            ],
            [
                "name" => "Sawo",
                "calories" => 83,
                "protein" => 0.4,
                "carbs" => 20,
                "fat" => 1.1,
                "description" => "Sawo segar, 100 gram"
            ],
            [
                "name" => "Jambu Air",
                "calories" => 46,
                "protein" => 0.6,
                "carbs" => 11,
                "fat" => 0.2,
                "description" => "Jambu air segar, 100 gram"
            ],
            [
                "name" => "Kedondong",
                "calories" => 47,
                "protein" => 1,
                "carbs" => 12,
                "fat" => 0.2,
                "description" => "Kedondong segar, 100 gram"
            ],
            [
                "name" => "Minyak Kanola",
                "calories" => 884,
                "protein" => 0,
                "carbs" => 0,
                "fat" => 100,
                "description" => "Minyak kanola murni, 100 ml"
            ],
            [
                "name" => "Susu Oat",
                "calories" => 50,
                "protein" => 1.2,
                "carbs" => 9,
                "fat" => 1.5,
                "description" => "Susu oat tanpa gula, 100 ml"
            ],
            [
                "name" => "Daun Pandan",
                "calories" => 43,
                "protein" => 2,
                "carbs" => 8,
                "fat" => 0.4,
                "description" => "Daun pandan segar, 100 gram"
            ],
            [
                "name" => "Serai",
                "calories" => 99,
                "protein" => 1.8,
                "carbs" => 25,
                "fat" => 0.5,
                "description" => "Serai segar, 100 gram"
            ],
            [
                "name" => "Kapulaga",
                "calories" => 311,
                "protein" => 11,
                "carbs" => 68,
                "fat" => 7,
                "description" => "Kapulaga bubuk, 100 gram"
            ],
            [
                "name" => "Daun Salam",
                "calories" => 313,
                "protein" => 8,
                "carbs" => 75,
                "fat" => 8,
                "description" => "Daun salam kering, 100 gram"
            ],
            [
                "name" => "Biji Ketumbar",
                "calories" => 298,
                "protein" => 12,
                "carbs" => 55,
                "fat" => 18,
                "description" => "Biji ketumbar kering, 100 gram"
            ],
            [
                "name" => "Adas Manis",
                "calories" => 337,
                "protein" => 16,
                "carbs" => 52,
                "fat" => 15,
                "description" => "Biji adas manis kering, 100 gram"
            ],
            [
                "name" => "Biji Bunga Matahari",
                "calories" => 584,
                "protein" => 21,
                "carbs" => 24,
                "fat" => 51,
                "description" => "Biji bunga matahari kering, 100 gram"
            ],
            [
                "name" => "Biji Rami",
                "calories" => 534,
                "protein" => 18,
                "carbs" => 29,
                "fat" => 42,
                "description" => "Biji rami kering, 100 gram"
            ],
            [
                "name" => "Millet",
                "calories" => 378,
                "protein" => 11,
                "carbs" => 73,
                "fat" => 4.2,
                "description" => "Millet mentah, 100 gram"
            ],
            [
                "name" => "Daging Kelinci",
                "calories" => 136,
                "protein" => 20,
                "carbs" => 0,
                "fat" => 6,
                "description" => "Daging kelinci tanpa lemak, mentah, 100 gram"
            ],
            [
                "name" => "Hati Sapi",
                "calories" => 135,
                "protein" => 20,
                "carbs" => 4,
                "fat" => 4,
                "description" => "Hati sapi mentah, 100 gram"
            ],
            [
                "name" => "Ikan Patin",
                "calories" => 144,
                "protein" => 17,
                "carbs" => 0,
                "fat" => 8,
                "description" => "Fillet ikan patin mentah, 100 gram"
            ],
            [
                "name" => "Ikan Mujair",
                "calories" => 96,
                "protein" => 19,
                "carbs" => 0,
                "fat" => 2,
                "description" => "Ikan mujair mentah, 100 gram"
            ],
            [
                "name" => "Kepiting",
                "calories" => 83,
                "protein" => 17,
                "carbs" => 0,
                "fat" => 1.2,
                "description" => "Daging kepiting segar, mentah, 100 gram"
            ],
            [
                "name" => "Kacang Macadamia",
                "calories" => 718,
                "protein" => 8,
                "carbs" => 14,
                "fat" => 76,
                "description" => "Kacang macadamia mentah, 100 gram"
            ],
            [
                "name" => "Kacang Hazel",
                "calories" => 628,
                "protein" => 15,
                "carbs" => 17,
                "fat" => 61,
                "description" => "Kacang hazel mentah, 100 gram"
            ],
            [
                "name" => "Biji Flaxseed",
                "calories" => 534,
                "protein" => 18,
                "carbs" => 29,
                "fat" => 42,
                "description" => "Biji flaxseed kering, 100 gram"
            ],
            [
                "name" => "Kacang Adzuki",
                "calories" => 329,
                "protein" => 20,
                "carbs" => 63,
                "fat" => 0.5,
                "description" => "Kacang adzuki kering, 100 gram"
            ],
            [
                "name" => "Bayam Merah",
                "calories" => 23,
                "protein" => 2.9,
                "carbs" => 3.6,
                "fat" => 0.4,
                "description" => "Bayam merah segar, 100 gram"
            ],
            [
                "name" => "Daun Pepaya",
                "calories" => 39,
                "protein" => 3,
                "carbs" => 7,
                "fat" => 0.5,
                "description" => "Daun pepaya segar, 100 gram"
            ],
            [
                "name" => "Sawi Putih",
                "calories" => 16,
                "protein" => 1.2,
                "carbs" => 3.2,
                "fat" => 0.2,
                "description" => "Sawi putih segar, 100 gram"
            ],
            [
                "name" => "Jamur Enoki",
                "calories" => 37,
                "protein" => 2.7,
                "carbs" => 7.8,
                "fat" => 0.3,
                "description" => "Jamur enoki segar, 100 gram"
            ],
            [
                "name" => "Kailan",
                "calories" => 30,
                "protein" => 2.5,
                "carbs" => 5,
                "fat" => 0.7,
                "description" => "Kailan segar, 100 gram"
            ],
            [
                "name" => "Bit",
                "calories" => 43,
                "protein" => 1.6,
                "carbs" => 10,
                "fat" => 0.2,
                "description" => "Bit segar, 100 gram"
            ],
            [
                "name" => "Selada Air",
                "calories" => 11,
                "protein" => 2.3,
                "carbs" => 1.3,
                "fat" => 0.1,
                "description" => "Selada air segar, 100 gram"
            ],
            [
                "name" => "Jicama",
                "calories" => 38,
                "protein" => 0.7,
                "carbs" => 9,
                "fat" => 0.1,
                "description" => "Jicama (bengkuang) segar, 100 gram"
            ],
            [
                "name" => "Beras Basmati",
                "calories" => 360,
                "protein" => 7.5,
                "carbs" => 78,
                "fat" => 0.9,
                "description" => "Beras basmati mentah, 100 gram"
            ],
            [
                "name" => "Labu Kuning",
                "calories" => 26,
                "protein" => 1,
                "carbs" => 6.5,
                "fat" => 0.1,
                "description" => "Labu kuning mentah, 100 gram"
            ],
            [
                "name" => "Duku",
                "calories" => 63,
                "protein" => 0.8,
                "carbs" => 16,
                "fat" => 0.2,
                "description" => "Duku segar, 100 gram"
            ],
            [
                "name" => "Jeruk Bali",
                "calories" => 38,
                "protein" => 0.8,
                "carbs" => 9.6,
                "fat" => 0.1,
                "description" => "Jeruk bali segar, 100 gram"
            ],
            [
                "name" => "Ceri",
                "calories" => 63,
                "protein" => 1,
                "carbs" => 16,
                "fat" => 0.2,
                "description" => "Ceri segar, 100 gram"
            ],
            [
                "name" => "Delima",
                "calories" => 83,
                "protein" => 1.7,
                "carbs" => 19,
                "fat" => 1.2,
                "description" => "Delima segar, 100 gram"
            ],
            [
                "name" => "Pir",
                "calories" => 57,
                "protein" => 0.4,
                "carbs" => 15,
                "fat" => 0.1,
                "description" => "Pir segar, 100 gram"
            ],
            [
                "name" => "Aprikot",
                "calories" => 48,
                "protein" => 1.4,
                "carbs" => 11,
                "fat" => 0.4,
                "description" => "Aprikot segar, 100 gram"
            ],
            [
                "name" => "Persik",
                "calories" => 39,
                "protein" => 0.9,
                "carbs" => 10,
                "fat" => 0.3,
                "description" => "Persik segar, 100 gram"
            ],
            [
                "name" => "Kurma",
                "calories" => 277,
                "protein" => 1.8,
                "carbs" => 75,
                "fat" => 0.2,
                "description" => "Kurma kering, 100 gram"
            ],
            [
                "name" => "Kismis",
                "calories" => 299,
                "protein" => 3.1,
                "carbs" => 79,
                "fat" => 0.5,
                "description" => "Kismis kering, 100 gram"
            ],
            [
                "name" => "Srikaya",
                "calories" => 101,
                "protein" => 1.7,
                "carbs" => 25,
                "fat" => 0.6,
                "description" => "Srikaya segar, 100 gram"
            ],
            [
                "name" => "Minyak Biji Anggur",
                "calories" => 884,
                "protein" => 0,
                "carbs" => 0,
                "fat" => 100,
                "description" => "Minyak biji anggur murni, 100 ml"
            ],
            [
                "name" => "Susu Kelapa",
                "calories" => 24,
                "protein" => 0.3,
                "carbs" => 3.3,
                "fat" => 1.1,
                "description" => "Susu kelapa tanpa gula, 100 ml"
            ],
            [
                "name" => "Jintan",
                "calories" => 375,
                "protein" => 18,
                "carbs" => 44,
                "fat" => 22,
                "description" => "Biji jintan kering, 100 gram"
            ],
            [
                "name" => "Pala",
                "calories" => 525,
                "protein" => 6,
                "carbs" => 49,
                "fat" => 36,
                "description" => "Biji pala bubuk, 100 gram"
            ],
            [
                "name" => "Kayu Manis",
                "calories" => 247,
                "protein" => 4,
                "carbs" => 81,
                "fat" => 1.2,
                "description" => "Kayu manis bubuk, 100 gram"
            ],
            [
                "name" => "Cengkeh",
                "calories" => 274,
                "protein" => 6,
                "carbs" => 66,
                "fat" => 13,
                "description" => "Cengkeh kering, 100 gram"
            ],
            [
                "name" => "Daun Ketumbar",
                "calories" => 23,
                "protein" => 2.1,
                "carbs" => 3.7,
                "fat" => 0.5,
                "description" => "Daun ketumbar segar, 100 gram"
            ],
            [
                "name" => "Daun Mint",
                "calories" => 44,
                "protein" => 3.3,
                "carbs" => 8,
                "fat" => 0.7,
                "description" => "Daun mint segar, 100 gram"
            ],
            [
                "name" => "Biji Selasih",
                "calories" => 486,
                "protein" => 17,
                "carbs" => 42,
                "fat" => 31,
                "description" => "Biji selasih kering, 100 gram"
            ],
            [
                "name" => "Biji Poppy",
                "calories" => 525,
                "protein" => 18,
                "carbs" => 28,
                "fat" => 42,
                "description" => "Biji poppy kering, 100 gram"
            ],
            [
                "name" => "Amaranth",
                "calories" => 371,
                "protein" => 14,
                "carbs" => 65,
                "fat" => 7,
                "description" => "Biji amaranth mentah, 100 gram"
            ],
            [
                "name" => "Daging Bebek",
                "calories" => 201,
                "protein" => 16,
                "carbs" => 0,
                "fat" => 15,
                "description" => "Daging bebek tanpa kulit, mentah, 100 gram"
            ],
            [
                "name" => "Usus Sapi",
                "calories" => 94,
                "protein" => 14,
                "carbs" => 0,
                "fat" => 4,
                "description" => "Usus sapi mentah, 100 gram"
            ],
            [
                "name" => "Ikan Gurame",
                "calories" => 103,
                "protein" => 19,
                "carbs" => 0,
                "fat" => 3,
                "description" => "Fillet ikan gurame mentah, 100 gram"
            ],
            [
                "name" => "Ikan Bandeng",
                "calories" => 148,
                "protein" => 20,
                "carbs" => 0,
                "fat" => 7,
                "description" => "Ikan bandeng mentah, 100 gram"
            ],
            [
                "name" => "Kerang",
                "calories" => 86,
                "protein" => 15,
                "carbs" => 4,
                "fat" => 1,
                "description" => "Daging kerang segar, mentah, 100 gram"
            ],
            [
                "name" => "Kacang Pecan",
                "calories" => 691,
                "protein" => 9,
                "carbs" => 14,
                "fat" => 72,
                "description" => "Kacang pecan mentah, 100 gram"
            ],
            [
                "name" => "Kacang Brazil",
                "calories" => 659,
                "protein" => 14,
                "carbs" => 12,
                "fat" => 67,
                "description" => "Kacang brazil mentah, 100 gram"
            ],
            [
                "name" => "Biji Kinoa Merah",
                "calories" => 368,
                "protein" => 14,
                "carbs" => 64,
                "fat" => 6,
                "description" => "Biji kinoa merah mentah, 100 gram"
            ],
            [
                "name" => "Kacang Lentil Merah",
                "calories" => 358,
                "protein" => 26,
                "carbs" => 60,
                "fat" => 1,
                "description" => "Lentil merah kering, 100 gram"
            ],
            [
                "name" => "Daun Moringa",
                "calories" => 64,
                "protein" => 9.4,
                "carbs" => 8.3,
                "fat" => 1.4,
                "description" => "Daun moringa segar, 100 gram"
            ],
            [
                "name" => "Kubis Brussel",
                "calories" => 43,
                "protein" => 3.4,
                "carbs" => 9,
                "fat" => 0.3,
                "description" => "Kubis brussel segar, 100 gram"
            ],
            [
                "name" => "Daun Singkong Muda",
                "calories" => 37,
                "protein" => 3.7,
                "carbs" => 7,
                "fat" => 0.4,
                "description" => "Daun singkong muda segar, 100 gram"
            ],
            [
                "name" => "Jamur Portobello",
                "calories" => 22,
                "protein" => 2.1,
                "carbs" => 3.9,
                "fat" => 0.3,
                "description" => "Jamur portobello segar, 100 gram"
            ],
            [
                "name" => "Daun Talas",
                "calories" => 42,
                "protein" => 2.5,
                "carbs" => 7,
                "fat" => 0.7,
                "description" => "Daun talas segar, 100 gram"
            ],
            [
                "name" => "Kucai",
                "calories" => 30,
                "protein" => 3.3,
                "carbs" => 4.4,
                "fat" => 0.7,
                "description" => "Kucai segar, 100 gram"
            ],
            [
                "name" => "Arugula",
                "calories" => 25,
                "protein" => 2.6,
                "carbs" => 3.7,
                "fat" => 0.7,
                "description" => "Arugula segar, 100 gram"
            ],
            [
                "name" => "Parsnip",
                "calories" => 75,
                "protein" => 1.2,
                "carbs" => 18,
                "fat" => 0.3,
                "description" => "Parsnip segar, 100 gram"
            ],
            [
                "name" => "Beras Arborio",
                "calories" => 358,
                "protein" => 7,
                "carbs" => 78,
                "fat" => 0.7,
                "description" => "Beras arborio mentah, 100 gram"
            ],
            [
                "name" => "Ganyong",
                "calories" => 112,
                "protein" => 1.5,
                "carbs" => 26,
                "fat" => 0.2,
                "description" => "Ganyong mentah, 100 gram"
            ],
            [
                "name" => "Cempedak",
                "calories" => 117,
                "protein" => 2.5,
                "carbs" => 27,
                "fat" => 0.4,
                "description" => "Cempedak segar, 100 gram"
            ],
            [
                "name" => "Matoa",
                "calories" => 65,
                "protein" => 0.8,
                "carbs" => 16,
                "fat" => 0.2,
                "description" => "Matoa segar, 100 gram"
            ],
            [
                "name" => "Kundur",
                "calories" => 14,
                "protein" => 0.4,
                "carbs" => 3.4,
                "fat" => 0.1,
                "description" => "Kundur (labu air) segar, 100 gram"
            ],
            [
                "name" => "Kesemek",
                "calories" => 70,
                "protein" => 0.5,
                "carbs" => 18,
                "fat" => 0.2,
                "description" => "Kesemek segar, 100 gram"
            ],
            [
                "name" => "Plum",
                "calories" => 46,
                "protein" => 0.7,
                "carbs" => 11,
                "fat" => 0.3,
                "description" => "Plum segar, 100 gram"
            ],
            [
                "name" => "Tin",
                "calories" => 74,
                "protein" => 0.9,
                "carbs" => 19,
                "fat" => 0.2,
                "description" => "Tin segar, 100 gram"
            ],
            [
                "name" => "Kersen",
                "calories" => 60,
                "protein" => 1,
                "carbs" => 14,
                "fat" => 0.3,
                "description" => "Kersen segar, 100 gram"
            ],
            [
                "name" => "Buah Naga",
                "calories" => 60,
                "protein" => 1.2,
                "carbs" => 13,
                "fat" => 0.4,
                "description" => "Buah naga segar, 100 gram"
            ],
            [
                "name" => "Markisa Kuning",
                "calories" => 97,
                "protein" => 2.2,
                "carbs" => 23,
                "fat" => 0.7,
                "description" => "Markisa kuning segar, 100 gram"
            ],
            [
                "name" => "Jambu Monyet",
                "calories" => 55,
                "protein" => 0.7,
                "carbs" => 14,
                "fat" => 0.2,
                "description" => "Jambu monyet segar, 100 gram"
            ],
            [
                "name" => "Minyak Wijen",
                "calories" => 884,
                "protein" => 0,
                "carbs" => 0,
                "fat" => 100,
                "description" => "Minyak wijen murni, 100 ml"
            ],
            [
                "name" => "Susu Kacang Mete",
                "calories" => 25,
                "protein" => 0.5,
                "carbs" => 2,
                "fat" => 1.5,
                "description" => "Susu kacang mete tanpa gula, 100 ml"
            ],
            [
                "name" => "Saffron",
                "calories" => 310,
                "protein" => 11,
                "carbs" => 65,
                "fat" => 6,
                "description" => "Saffron kering, 100 gram"
            ],
            [
                "name" => "Asam Jawa",
                "calories" => 239,
                "protein" => 2.8,
                "carbs" => 63,
                "fat" => 0.6,
                "description" => "Asam jawa kering, 100 gram"
            ],
            [
                "name" => "Lengkuas",
                "calories" => 71,
                "protein" => 1,
                "carbs" => 15,
                "fat" => 0.3,
                "description" => "Lengkuas segar, 100 gram"
            ],
            [
                "name" => "Daun Kari",
                "calories" => 66,
                "protein" => 6,
                "carbs" => 12,
                "fat" => 1,
                "description" => "Daun kari segar, 100 gram"
            ],
            [
                "name" => "Daun Parsley",
                "calories" => 36,
                "protein" => 3,
                "carbs" => 6,
                "fat" => 0.8,
                "description" => "Daun parsley segar, 100 gram"
            ],
            [
                "name" => "Daun Basil",
                "calories" => 23,
                "protein" => 3.2,
                "carbs" => 2.7,
                "fat" => 0.6,
                "description" => "Daun basil segar, 100 gram"
            ],
            [
                "name" => "Biji Adas",
                "calories" => 345,
                "protein" => 16,
                "carbs" => 52,
                "fat" => 15,
                "description" => "Biji adas kering, 100 gram"
            ],
            [
                "name" => "Biji Moster",
                "calories" => 508,
                "protein" => 26,
                "carbs" => 28,
                "fat" => 36,
                "description" => "Biji moster kering, 100 gram"
            ],
            [
                "name" => "Biji Bulgur",
                "calories" => 342,
                "protein" => 12,
                "carbs" => 76,
                "fat" => 1.3,
                "description" => "Biji bulgur mentah, 100 gram"
            ],
            [
                "name" => "Daging Domba",
                "calories" => 206,
                "protein" => 19,
                "carbs" => 0,
                "fat" => 14,
                "description" => "Daging domba tanpa lemak, mentah, 100 gram"
            ],
            [
                "name" => "Lidah Sapi",
                "calories" => 224,
                "protein" => 16,
                "carbs" => 3.7,
                "fat" => 16,
                "description" => "Lidah sapi mentah, 100 gram"
            ],
            [
                "name" => "Ikan Nila",
                "calories" => 96,
                "protein" => 20,
                "carbs" => 0,
                "fat" => 1.7,
                "description" => "Fillet ikan nila mentah, 100 gram"
            ],
            [
                "name" => "Ikan Mas",
                "calories" => 127,
                "protein" => 18,
                "carbs" => 0,
                "fat" => 5.6,
                "description" => "Ikan mas mentah, 100 gram"
            ],
            [
                "name" => "Tiram",
                "calories" => 68,
                "protein" => 7,
                "carbs" => 4,
                "fat" => 2.5,
                "description" => "Daging tiram segar, mentah, 100 gram"
            ],
            [
                "name" => "Kacang Pinus",
                "calories" => 673,
                "protein" => 14,
                "carbs" => 13,
                "fat" => 68,
                "description" => "Kacang pinus mentah, 100 gram"
            ],
            [
                "name" => "Kacang Chickpea",
                "calories" => 364,
                "protein" => 19,
                "carbs" => 61,
                "fat" => 6,
                "description" => "Kacang chickpea kering, 100 gram"
            ],
            [
                "name" => "Biji Hemp",
                "calories" => 553,
                "protein" => 32,
                "carbs" => 9,
                "fat" => 49,
                "description" => "Biji hemp kering, 100 gram"
            ],
            [
                "name" => "Kacang Fava",
                "calories" => 341,
                "protein" => 26,
                "carbs" => 58,
                "fat" => 1.5,
                "description" => "Kacang fava kering, 100 gram"
            ],
            [
                "name" => "Daun Selada Romaine",
                "calories" => 17,
                "protein" => 1.2,
                "carbs" => 3.3,
                "fat" => 0.3,
                "description" => "Selada romaine segar, 100 gram"
            ],
            [
                "name" => "Daun Genjer",
                "calories" => 28,
                "protein" => 2,
                "carbs" => 5,
                "fat" => 0.3,
                "description" => "Daun genjer segar, 100 gram"
            ],
            [
                "name" => "Daun Kelor",
                "calories" => 64,
                "protein" => 9.4,
                "carbs" => 8.3,
                "fat" => 1.4,
                "description" => "Daun kelor segar, 100 gram"
            ],
            [
                "name" => "Jamur Kancing",
                "calories" => 22,
                "protein" => 3.1,
                "carbs" => 3.3,
                "fat" => 0.3,
                "description" => "Jamur kancing segar, 100 gram"
            ],
            [
                "name" => "Daun Bawang Merah",
                "calories" => 32,
                "protein" => 1.8,
                "carbs" => 7,
                "fat" => 0.1,
                "description" => "Daun bawang merah segar, 100 gram"
            ],
            [
                "name" => "Endive",
                "calories" => 17,
                "protein" => 1.3,
                "carbs" => 3.4,
                "fat" => 0.2,
                "description" => "Endive segar, 100 gram"
            ],
            [
                "name" => "Kacang Merah Kecil",
                "calories" => 333,
                "protein" => 24,
                "carbs" => 60,
                "fat" => 1.1,
                "description" => "Kacang merah kecil kering, 100 gram"
            ],
            [
                "name" => "Daun Lobak",
                "calories" => 28,
                "protein" => 2.6,
                "carbs" => 5,
                "fat" => 0.4,
                "description" => "Daun lobak segar, 100 gram"
            ],
            [
                "name" => "Beras Liar",
                "calories" => 357,
                "protein" => 15,
                "carbs" => 75,
                "fat" => 1.1,
                "description" => "Beras liar mentah, 100 gram"
            ],
            [
                "name" => "Uwi",
                "calories" => 118,
                "protein" => 1.5,
                "carbs" => 27,
                "fat" => 0.2,
                "description" => "Uwi mentah, 100 gram"
            ],
            [
                "name" => "Rambai",
                "calories" => 65,
                "protein" => 0.7,
                "carbs" => 16,
                "fat" => 0.2,
                "description" => "Rambai segar, 100 gram"
            ],
            [
                "name" => "Kepel",
                "calories" => 62,
                "protein" => 0.8,
                "carbs" => 15,
                "fat" => 0.3,
                "description" => "Kepel segar, 100 gram"
            ],
            [
                "name" => "Kweni",
                "calories" => 60,
                "protein" => 0.8,
                "carbs" => 15,
                "fat" => 0.4,
                "description" => "Kweni segar, 100 gram"
            ],
            [
                "name" => "Jambu Bol",
                "calories" => 46,
                "protein" => 0.6,
                "carbs" => 11,
                "fat" => 0.2,
                "description" => "Jambu bol segar, 100 gram"
            ],
            [
                "name" => "Leci",
                "calories" => 66,
                "protein" => 0.8,
                "carbs" => 17,
                "fat" => 0.4,
                "description" => "Leci segar, 100 gram"
            ],
            [
                "name" => "Naga Merah",
                "calories" => 60,
                "protein" => 1.2,
                "carbs" => 13,
                "fat" => 0.4,
                "description" => "Buah naga merah segar, 100 gram"
            ],
            [
                "name" => "Srikaya Thailand",
                "calories" => 101,
                "protein" => 1.7,
                "carbs" => 25,
                "fat" => 0.6,
                "description" => "Srikaya Thailand segar, 100 gram"
            ],
            [
                "name" => "Ciplukan",
                "calories" => 53,
                "protein" => 1.9,
                "carbs" => 11,
                "fat" => 0.7,
                "description" => "Ciplukan segar, 100 gram"
            ],
            [
                "name" => "Menteng",
                "calories" => 65,
                "protein" => 0.8,
                "carbs" => 16,
                "fat" => 0.2,
                "description" => "Menteng segar, 100 gram"
            ],
            [
                "name" => "Gowok",
                "calories" => 63,
                "protein" => 0.7,
                "carbs" => 15,
                "fat" => 0.3,
                "description" => "Gowok segar, 100 gram"
            ],
            [
                "name" => "Minyak Biji Rami",
                "calories" => 884,
                "protein" => 0,
                "carbs" => 0,
                "fat" => 100,
                "description" => "Minyak biji rami murni, 100 ml"
            ],
            [
                "name" => "Susu Kedelai Hitam",
                "calories" => 45,
                "protein" => 3.5,
                "carbs" => 4,
                "fat" => 1.8,
                "description" => "Susu kedelai hitam tanpa gula, 100 ml"
            ],
            [
                "name" => "Bunga Safflower",
                "calories" => 517,
                "protein" => 16,
                "carbs" => 34,
                "fat" => 38,
                "description" => "Biji safflower kering, 100 gram"
            ],
            [
                "name" => "Kemukus",
                "calories" => 255,
                "protein" => 10,
                "carbs" => 64,
                "fat" => 3.3,
                "description" => "Kemukus kering, 100 gram"
            ],
            [
                "name" => "Daun Jintan",
                "calories" => 23,
                "protein" => 2.1,
                "carbs" => 3.7,
                "fat" => 0.5,
                "description" => "Daun jintan segar, 100 gram"
            ],
            [
                "name" => "Daun Oregano",
                "calories" => 265,
                "protein" => 9,
                "carbs" => 69,
                "fat" => 4.3,
                "description" => "Daun oregano kering, 100 gram"
            ],
            [
                "name" => "Daun Thyme",
                "calories" => 276,
                "protein" => 9,
                "carbs" => 64,
                "fat" => 7,
                "description" => "Daun thyme kering, 100 gram"
            ],
            [
                "name" => "Biji Fenugreek",
                "calories" => 323,
                "protein" => 23,
                "carbs" => 58,
                "fat" => 6,
                "description" => "Biji fenugreek kering, 100 gram"
            ],
            [
                "name" => "Biji Nigella",
                "calories" => 345,
                "protein" => 16,
                "carbs" => 52,
                "fat" => 15,
                "description" => "Biji nigella kering, 100 gram"
            ],
            [
                "name" => "Biji Anis",
                "calories" => 337,
                "protein" => 18,
                "carbs" => 50,
                "fat" => 16,
                "description" => "Biji anis kering, 100 gram"
            ],
            [
                "name" => "Oatmeal",
                "calories" => 389,
                "protein" => 13,
                "carbs" => 66,
                "fat" => 7,
                "description" => "Oatmeal mentah, tinggi serat, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Daging Kalkun",
                "calories" => 104,
                "protein" => 22,
                "carbs" => 0,
                "fat" => 2,
                "description" => "Daging kalkun tanpa lemak, mentah, tinggi protein untuk diet, 100 gram"
            ],
            [
                "name" => "Hati Ayam",
                "calories" => 116,
                "protein" => 17,
                "carbs" => 0,
                "fat" => 5,
                "description" => "Hati ayam mentah, kaya zat besi, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Ikan Tuna",
                "calories" => 108,
                "protein" => 23,
                "carbs" => 0,
                "fat" => 1,
                "description" => "Fillet tuna mentah, rendah lemak, ideal untuk diet, 100 gram"
            ],
            [
                "name" => "Ikan Kod",
                "calories" => 82,
                "protein" => 18,
                "carbs" => 0,
                "fat" => 0.7,
                "description" => "Ikan kod mentah, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Belut",
                "calories" => 184,
                "protein" => 18,
                "carbs" => 0,
                "fat" => 12,
                "description" => "Belut segar, mentah, tinggi lemak sehat untuk bulking, 100 gram"
            ],
            [
                "name" => "Kacang Edamame",
                "calories" => 121,
                "protein" => 11,
                "carbs" => 10,
                "fat" => 5,
                "description" => "Edamame segar, tinggi protein nabati, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Kacang Lentil Hitam",
                "calories" => 352,
                "protein" => 25,
                "carbs" => 63,
                "fat" => 1,
                "description" => "Lentil hitam kering, tinggi protein dan karbo untuk bulking, 100 gram"
            ],
            [
                "name" => "Biji Quinoa Hitam",
                "calories" => 368,
                "protein" => 14,
                "carbs" => 64,
                "fat" => 6,
                "description" => "Quinoa hitam mentah, tinggi karbo kompleks untuk bulking, 100 gram"
            ],
            [
                "name" => "Kacang Navy",
                "calories" => 337,
                "protein" => 22,
                "carbs" => 61,
                "fat" => 1.5,
                "description" => "Kacang navy kering, tinggi protein, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Kale",
                "calories" => 49,
                "protein" => 4.3,
                "carbs" => 9,
                "fat" => 0.9,
                "description" => "Kale segar, rendah kalori, kaya vitamin untuk diet, 100 gram"
            ],
            [
                "name" => "Daun Pakis",
                "calories" => 34,
                "protein" => 4.6,
                "carbs" => 5,
                "fat" => 0.4,
                "description" => "Daun pakis segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Bunga Kolplay",
                "calories" => 25,
                "protein" => 2,
                "carbs" => 5,
                "fat" => 0.3,
                "description" => "Bunga kolplay segar, rendah kalori, ideal untuk diet, 100 gram"
            ],
            [
                "name" => "Jamur Maitake",
                "calories" => 31,
                "protein" => 1.9,
                "carbs" => 7,
                "fat" => 0.2,
                "description" => "Jamur maitake segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Daun Bayam Jepang",
                "calories" => 20,
                "protein" => 2.2,
                "carbs" => 3,
                "fat" => 0.4,
                "description" => "Bayam Jepang segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Seledri Akar",
                "calories" => 42,
                "protein" => 1.5,
                "carbs" => 9,
                "fat" => 0.3,
                "description" => "Seledri akar segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Kacang Hijau Sprout",
                "calories" => 30,
                "protein" => 3,
                "carbs" => 6,
                "fat" => 0.2,
                "description" => "Tauge kacang hijau segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Daun Sawah Lettuce",
                "calories" => 15,
                "protein" => 1.4,
                "carbs" => 2.9,
                "fat" => 0.2,
                "description" => "Selada sawah segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Beras Merah Lokal",
                "calories" => 362,
                "protein" => 7.5,
                "carbs" => 77,
                "fat" => 2.7,
                "description" => "Beras merah lokal mentah, tinggi karbo untuk bulking, 100 gram"
            ],
            [
                "name" => "Sukun",
                "calories" => 103,
                "protein" => 1.1,
                "carbs" => 27,
                "fat" => 0.2,
                "description" => "Sukun mentah, tinggi karbo, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Durian Montong",
                "calories" => 147,
                "protein" => 1.5,
                "carbs" => 27,
                "fat" => 5.3,
                "description" => "Durian montong segar, tinggi kalori untuk bulking, 100 gram"
            ],
            [
                "name" => "Jeruk Nipis",
                "calories" => 30,
                "protein" => 0.7,
                "carbs" => 11,
                "fat" => 0.2,
                "description" => "Jeruk nipis segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Belimbing Wuluh",
                "calories" => 31,
                "protein" => 1,
                "carbs" => 7,
                "fat" => 0.3,
                "description" => "Belimbing wuluh segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Asam Kandis",
                "calories" => 30,
                "protein" => 0.5,
                "carbs" => 7,
                "fat" => 0.2,
                "description" => "Asam kandis segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Nanas Madu",
                "calories" => 50,
                "protein" => 0.5,
                "carbs" => 13,
                "fat" => 0.1,
                "description" => "Nanas madu segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Anggur Hitam",
                "calories" => 69,
                "protein" => 0.7,
                "carbs" => 18,
                "fat" => 0.2,
                "description" => "Anggur hitam segar, rendah lemak, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Melon Hijau",
                "calories" => 34,
                "protein" => 0.8,
                "carbs" => 8.2,
                "fat" => 0.2,
                "description" => "Melon hijau segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Pir Asia",
                "calories" => 42,
                "protein" => 0.5,
                "carbs" => 11,
                "fat" => 0.2,
                "description" => "Pir Asia segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Mangga Harum Manis",
                "calories" => 60,
                "protein" => 0.8,
                "carbs" => 15,
                "fat" => 0.4,
                "description" => "Mangga harum manis segar, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Pisang Raja",
                "calories" => 89,
                "protein" => 1.1,
                "carbs" => 23,
                "fat" => 0.3,
                "description" => "Pisang raja segar, tinggi karbo untuk bulking, 100 gram"
            ],
            [
                "name" => "Minyak Alpukat",
                "calories" => 884,
                "protein" => 0,
                "carbs" => 0,
                "fat" => 100,
                "description" => "Minyak alpukat murni, tinggi lemak sehat untuk bulking, 100 ml"
            ],
            [
                "name" => "Susu Beras",
                "calories" => 47,
                "protein" => 0.3,
                "carbs" => 9,
                "fat" => 1,
                "description" => "Susu beras tanpa gula, rendah kalori, cocok untuk diet, 100 ml"
            ],
            [
                "name" => "Daun Rosemary",
                "calories" => 131,
                "protein" => 3.3,
                "carbs" => 21,
                "fat" => 6,
                "description" => "Daun rosemary kering, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Biji Caraway",
                "calories" => 333,
                "protein" => 20,
                "carbs" => 50,
                "fat" => 15,
                "description" => "Biji caraway kering, tinggi protein, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Daun Sage",
                "calories" => 315,
                "protein" => 11,
                "carbs" => 61,
                "fat" => 13,
                "description" => "Daun sage kering, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Daun Tarragon",
                "calories" => 295,
                "protein" => 23,
                "carbs" => 50,
                "fat" => 7,
                "description" => "Daun tarragon kering, tinggi protein, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Biji Dill",
                "calories" => 305,
                "protein" => 16,
                "carbs" => 55,
                "fat" => 15,
                "description" => "Biji dill kering, tinggi protein, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Biji Coriander",
                "calories" => 298,
                "protein" => 12,
                "carbs" => 55,
                "fat" => 18,
                "description" => "Biji coriander kering, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Biji Mustard Kuning",
                "calories" => 508,
                "protein" => 26,
                "carbs" => 28,
                "fat" => 36,
                "description" => "Biji mustard kuning kering, tinggi protein, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Biji Paprika",
                "calories" => 318,
                "protein" => 14,
                "carbs" => 54,
                "fat" => 17,
                "description" => "Biji paprika kering, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Teff",
                "calories" => 367,
                "protein" => 13,
                "carbs" => 73,
                "fat" => 2.4,
                "description" => "Biji teff mentah, tinggi karbo kompleks untuk bulking, 100 gram"
            ],
            [
                "name" => "Daging Rusa",
                "calories" => 120,
                "protein" => 23,
                "carbs" => 0,
                "fat" => 2.4,
                "description" => "Daging rusa tanpa lemak, mentah, tinggi protein untuk diet, 100 gram"
            ],
            [
                "name" => "Jantung Sapi",
                "calories" => 112,
                "protein" => 17,
                "carbs" => 0.1,
                "fat" => 4,
                "description" => "Jantung sapi mentah, rendah lemak, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Ikan Haring",
                "calories" => 158,
                "protein" => 18,
                "carbs" => 0,
                "fat" => 9,
                "description" => "Ikan haring mentah, tinggi lemak sehat untuk bulking, 100 gram"
            ],
            [
                "name" => "Ikan Makarel",
                "calories" => 205,
                "protein" => 19,
                "carbs" => 0,
                "fat" => 14,
                "description" => "Ikan makarel mentah, tinggi lemak sehat untuk bulking, 100 gram"
            ],
            [
                "name" => "Sotong",
                "calories" => 92,
                "protein" => 16,
                "carbs" => 3,
                "fat" => 1.4,
                "description" => "Sotong segar, mentah, tinggi protein untuk diet, 100 gram"
            ],
            [
                "name" => "Kacang Azuki",
                "calories" => 329,
                "protein" => 20,
                "carbs" => 63,
                "fat" => 0.5,
                "description" => "Kacang azuki kering, tinggi protein dan karbo untuk bulking, 100 gram"
            ],
            [
                "name" => "Kacang Black-Eyed Peas",
                "calories" => 336,
                "protein" => 24,
                "carbs" => 60,
                "fat" => 1.3,
                "description" => "Kacang black-eyed peas kering, tinggi protein untuk bulking, 100 gram"
            ],
            [
                "name" => "Biji Amaranth Merah",
                "calories" => 371,
                "protein" => 14,
                "carbs" => 65,
                "fat" => 7,
                "description" => "Biji amaranth merah mentah, tinggi karbo untuk bulking, 100 gram"
            ],
            [
                "name" => "Kacang Mung",
                "calories" => 347,
                "protein" => 24,
                "carbs" => 63,
                "fat" => 1.2,
                "description" => "Kacang mung kering, tinggi protein untuk bulking, 100 gram"
            ],
            [
                "name" => "Chard",
                "calories" => 19,
                "protein" => 1.8,
                "carbs" => 3.7,
                "fat" => 0.2,
                "description" => "Chard segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Daun Katuk",
                "calories" => 59,
                "protein" => 6.8,
                "carbs" => 9,
                "fat" => 0.8,
                "description" => "Daun katuk segar, tinggi protein nabati untuk diet, 100 gram"
            ],
            [
                "name" => "Daun Ubi",
                "calories" => 35,
                "protein" => 3,
                "carbs" => 6,
                "fat" => 0.4,
                "description" => "Daun ubi segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Jamur Shimeji",
                "calories" => 35,
                "protein" => 2.5,
                "carbs" => 6,
                "fat" => 0.3,
                "description" => "Jamur shimeji segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Daun Kolesom",
                "calories" => 22,
                "protein" => 2.5,
                "carbs" => 3.5,
                "fat" => 0.3,
                "description" => "Daun kolesom segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Daun Selada Butterhead",
                "calories" => 13,
                "protein" => 1.4,
                "carbs" => 2.2,
                "fat" => 0.2,
                "description" => "Selada butterhead segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Alfalfa Sprout",
                "calories" => 23,
                "protein" => 4,
                "carbs" => 2.1,
                "fat" => 0.7,
                "description" => "Tauge alfalfa segar, tinggi protein nabati untuk diet, 100 gram"
            ],
            [
                "name" => "Daun Kemangi Thailand",
                "calories" => 22,
                "protein" => 3.2,
                "carbs" => 2.7,
                "fat" => 0.6,
                "description" => "Daun kemangi Thailand segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Beras Jasmine",
                "calories" => 356,
                "protein" => 7,
                "carbs" => 80,
                "fat" => 0.6,
                "description" => "Beras jasmine mentah, tinggi karbo untuk bulking, 100 gram"
            ],
            [
                "name" => "Garut",
                "calories" => 135,
                "protein" => 1.5,
                "carbs" => 31,
                "fat" => 0.2,
                "description" => "Umbu garut mentah, tinggi karbo untuk bulking, 100 gram"
            ],
            [
                "name" => "Blewah",
                "calories" => 34,
                "protein" => 0.8,
                "carbs" => 8.2,
                "fat" => 0.2,
                "description" => "Blewah segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Jeruk Sunkist",
                "calories" => 47,
                "protein" => 0.9,
                "carbs" => 12,
                "fat" => 0.1,
                "description" => "Jeruk sunkist segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Tamarillo",
                "calories" => 31,
                "protein" => 2,
                "carbs" => 4,
                "fat" => 0.4,
                "description" => "Tamarillo segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Buah Zuriat",
                "calories" => 66,
                "protein" => 1,
                "carbs" => 16,
                "fat" => 0.3,
                "description" => "Buah zuriat segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Jambu Kristal",
                "calories" => 68,
                "protein" => 2.6,
                "carbs" => 14,
                "fat" => 1,
                "description" => "Jambu kristal segar, rendah lemak, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Mangga Gedong",
                "calories" => 60,
                "protein" => 0.8,
                "carbs" => 15,
                "fat" => 0.4,
                "description" => "Mangga gedong segar, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Pisang Ambon",
                "calories" => 89,
                "protein" => 1.1,
                "carbs" => 23,
                "fat" => 0.3,
                "description" => "Pisang ambon segar, tinggi karbo untuk bulking, 100 gram"
            ],
            [
                "name" => "Sirsak Thailand",
                "calories" => 66,
                "protein" => 1,
                "carbs" => 17,
                "fat" => 0.3,
                "description" => "Sirsak Thailand segar, rendah lemak, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Kelapa Muda",
                "calories" => 19,
                "protein" => 0.7,
                "carbs" => 3.7,
                "fat" => 0.2,
                "description" => "Daging kelapa muda segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Salak Bali",
                "calories" => 77,
                "protein" => 0.4,
                "carbs" => 20,
                "fat" => 0.1,
                "description" => "Salak Bali segar, tinggi karbo untuk bulking, 100 gram"
            ],
            [
                "name" => "Minyak Biji Bunga Matahari",
                "calories" => 884,
                "protein" => 0,
                "carbs" => 0,
                "fat" => 100,
                "description" => "Minyak biji bunga matahari murni, tinggi lemak sehat untuk bulking, 100 ml"
            ],
            [
                "name" => "Susu Kacang Hazelnut",
                "calories" => 30,
                "protein" => 0.5,
                "carbs" => 3,
                "fat" => 1.5,
                "description" => "Susu kacang hazelnut tanpa gula, rendah kalori, cocok untuk diet, 100 ml"
            ],
            [
                "name" => "Biji Sorgum Merah",
                "calories" => 339,
                "protein" => 11,
                "carbs" => 75,
                "fat" => 3.3,
                "description" => "Biji sorgum merah mentah, tinggi karbo untuk bulking, 100 gram"
            ],
            [
                "name" => "Daun Marjoram",
                "calories" => 271,
                "protein" => 13,
                "carbs" => 60,
                "fat" => 7,
                "description" => "Daun marjoram kering, tinggi protein, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Biji Fennel",
                "calories" => 345,
                "protein" => 16,
                "carbs" => 52,
                "fat" => 15,
                "description" => "Biji fennel kering, tinggi protein, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Daun Lovage",
                "calories" => 35,
                "protein" => 3.5,
                "carbs" => 6,
                "fat" => 0.4,
                "description" => "Daun lovage segar, rendah kalori, cocok untuk diet, 100 gram"
            ],
            [
                "name" => "Biji Cardamom",
                "calories" => 311,
                "protein" => 11,
                "carbs" => 68,
                "fat" => 7,
                "description" => "Biji cardamom kering, tinggi karbo, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Biji Cumin",
                "calories" => 375,
                "protein" => 18,
                "carbs" => 44,
                "fat" => 22,
                "description" => "Biji cumin kering, tinggi protein, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Biji Saffron",
                "calories" => 310,
                "protein" => 11,
                "carbs" => 65,
                "fat" => 6,
                "description" => "Biji saffron kering, tinggi karbo, cocok untuk bulking, 100 gram"
            ],
            [
                "name" => "Daun Fenugreek",
                "calories" => 49,
                "protein" => 4.4,
                "carbs" => 6,
                "fat" => 0.9,
                "description" => "Daun fenugreek segar, rendah kalori, cocok untuk diet, 100 gram"
            ]
        ]);
    }
}
