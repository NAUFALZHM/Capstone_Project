<?php

use App\Http\Controllers\GiziController;
use App\Http\Controllers\ProfileController;
use Illuminate\Console\View\Components\Info;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiController;

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth','verified']);

Route::get('/gizi',[GiziController::class,'showForm'])->middleware(['auth','verified']);
Route::post('/gizi',[GiziController::class,'hitung'])->middleware(['auth','verified']);
Route::get('/informasi',[InformasiController::class,'showInfo'])->middleware(['auth','verified']);
Route::post('/informasi',[InformasiController::class,'showInfo'])->middleware(['auth','verified']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('dashboard');

    // Tambah route lain di sini juga, semua butuh login
});



require __DIR__.'/auth.php';
