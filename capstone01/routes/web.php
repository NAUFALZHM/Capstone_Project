<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\GiziController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiwayatController;
use Illuminate\Console\View\Components\Info;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiController;



Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/tambahInfoGizi', [AdminController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/tambahInfoGizi', [AdminController::class, 'store'])->middleware(['auth', 'verified']);
Route::get('/editInfoGizi/{id}', [AdminController::class, 'edit'])->middleware(['auth', 'verified']);
Route::put('/editInfoGizi/{id}', [AdminController::class, 'update'])->middleware(['auth', 'verified']);


// akses fungsi IMT
Route::get('/gizi', [GiziController::class, 'showForm'])->middleware(['auth', 'verified']);
Route::post('/gizi', [GiziController::class, 'hitung'])->middleware(['auth', 'verified']);

// akses fungsi pencarian informasi gizi makanan
Route::get('/informasi', [InformasiController::class, 'showInfo'])->middleware(['auth', 'verified'])->name('informasi');
// Route::get('/admin/sync-usda', [InformasiController::class, 'syncFromUSDA'])->middleware(['auth', 'verified', 'admin.access'])->name('admin.sync.usda');
Route::post('/informasi', [InformasiController::class, 'showInfo'])->middleware(['auth', 'verified']);

// akses riwayat
Route::get('/riwayat', [RiwayatController::class, 'riwayat'])->middleware((['auth', 'verified']));


Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profil/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profil/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [AuthenticatedSessionController::class, 'redirectTo'])->name('/dashboard');
// Tambah route lain di sini juga, semua butuh login
//hapus user dari admin

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'redirectTo'])->name('/dashboard');
    Route::delete('/user/{id}', [AdminController::class, 'destroy']);
});


// kalkulator
Route::post('/hitungan', [GiziController::class, 'HitungMenu']);
Route::get('/kalkulatorGizi', [GiziController::class, 'TampilkanKalkulator']);
Route::post('/hapusItem', [GiziController::class, 'hapusItem']);



require __DIR__ . '/auth.php';
