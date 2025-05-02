<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/informasi-gizi', function (Request $request) {
    $data = [
        "Makanan sehat untuk anak",
        "Pentingnya serat dalam diet",
        "Vitamin dan mineral yang dibutuhkan tubuh",
        "Cara menjaga berat badan ideal",
        "Manfaat protein untuk tubuh"
    ];

    $search = $request->query('search');
    $results = [];

    if ($search) {
        $results = array_filter($data, function ($item) use ($search) {
            return stripos($item, $search) !== false;
        });
    }

    return view('informasi_gizi', ['results' => $results]);
});

Route::get('/hitung-gizi', function () {
    return view('hitung_gizi');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});

// Tambahkan route untuk profil
Route::get('/profil', function () {
    return view('profil');
});
