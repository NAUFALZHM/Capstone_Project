<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\NutritionResult;

class RiwayatController extends Controller
{
    //controller untuk menampilkan riwayat
    public function riwayat()
    {
        $user = Auth::user();

        // Ambil semua data hasil penghitungan milik user ini
        $riwayat = NutritionResult::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('riwayat', compact('riwayat'));
    }
}
