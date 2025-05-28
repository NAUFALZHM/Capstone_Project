<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\GiziController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiwayatController;
use Illuminate\Console\View\Components\Info;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiController;

// Route::get('/admin-dashboard', function () {
//     return view('admin_gizi');
// })->middleware(['auth', 'admin.only']);
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'verified']);
// middleware kalau ingin akses index blm bisa klo blm login
// Route::get('/', function () {
//     return view('welcome');
// })->middleware(['auth', 'verified']);

// akses fungsi IMT
Route::get('/gizi', [GiziController::class, 'showForm'])->middleware(['auth', 'verified']);
Route::post('/gizi', [GiziController::class, 'hitung'])->middleware(['auth', 'verified']);

// akses fungsi pencarian informasi gizi makanan
Route::get('/informasi', [InformasiController::class, 'showInfo'])->middleware(['auth', 'verified'])->name('informasi');
Route::get('/admin/sync-usda', [InformasiController::class, 'syncFromUSDA'])->middleware(['auth', 'verified', 'admin.access'])->name('admin.sync.usda');
Route::get('/informasi', [InformasiController::class, 'showInfo'])->middleware(['auth', 'verified']);
Route::post('/informasi', [InformasiController::class, 'showInfo'])->middleware(['auth', 'verified']);

// akses riwayat
Route::get('/riwayat', [RiwayatController::class, 'riwayat'])->middleware((['auth', 'verified']));

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'redirectTo'])->name('/dashboard');
    // Tambah route lain di sini juga, semua butuh login
    //hapus user dari admin
    Route::delete('/user/{id}', [AdminController::class, 'destroy']);
});





require __DIR__ . '/auth.php';
