<?php

namespace App\Http\Controllers;

use App\Models\NutritionResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;

class GiziController extends Controller
{
    public function showForm()
    {
        return view('hitung_gizi');
    }

    public function hitung(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'age' => 'required|numeric|min:1',
            'weight' => 'required|numeric|min:1',
            'height' => 'required|numeric|min:1',
            'activity_level' => 'required|in:rendah,sedang,tinggi',
            'gender' => 'required|in:male,female',
        ]);

        // $user->update($validated);

        $calories = $this->calculateCalories($validated);
        $imt = $this->calculateIMT($validated);
        $statusGizi = $this->statusGizi($imt);

        if ($calories === null || $imt === null || $statusGizi === null) {
            return back()->withErrors(['error' => 'Data tidak lengkap untuk menghitung kalori, IMT, atau status gizi.']);
        } else {
            NutritionResult::create([
                'user_id' => $user->id, // pastikan user sudah login
                'kebutuhan_kalori_harian' => $calories,
                'IMT' => $imt,
                'status_gizi' => $statusGizi,
            ]);
        }

        return view('hitung_gizi', [
            'kalori' => $calories,
            'imt' => $imt,
            'status_gizi' => $statusGizi,
        ]);
    }
    private function calculateCalories($data)
    {
        $bmr = $data['gender'] === 'male'
            ? 88.362 + (13.397 * $data['weight']) + (4.799 * $data['height']) - (5.677 * $data['age'])
            : 447.593 + (9.247 * $data['weight']) + (3.098 * $data['height']) - (4.330 * $data['age']);

        $activityMultiplier = match ($data['activity_level']) {
            'rendah' => 1.2,
            'sedang' => 1.55,
            'tinggi' => 1.9,
            default => 1.2,
        };

        return round($bmr * $activityMultiplier);
    }

    private function calculateIMT($data)
    {
        $heightInMeter = $data['height'] / 100;
        return round($data['weight'] / ($heightInMeter ** 2), 1);
    }

    private function statusGizi($imt)
    {
        return match (true) {
            $imt < 18.5 => 'Kurus',
            $imt < 25   => 'Normal',
            $imt < 30   => 'Gemuk',
            default     => 'Obesitas',
        };
    }

    public function HitungMenu(Request $request)
    {
        $food = Food::find($request->food_id);

        if (!$food) {
            return redirect()->back()->with('error', 'Makanan tidak ditemukan.');
        }

        // Ambil data yang sudah ada di session, atau array kosong
        $menu = session()->get('menu', []);

        // Tambahkan makanan baru ke session
        $menu[] = $food;

        session()->put('menu', $menu);

        return redirect('/kalkulatorGizi'); // Halaman kalkulator
    }
    // tampilan Untuk Kalkulator
    public function TampilkanKalkulator()
    {
        $menu = session()->get('menu', []);

        // Hitung total
        $total = [
            'calories' => 0,
            'protein' => 0,
            'carbs' => 0,
            'fat' => 0,
        ];

        foreach ($menu as $item) {
            $total['calories'] += $item->calories;
            $total['protein'] += $item->protein;
            $total['carbs'] += $item->carbs;
            $total['fat'] += $item->fat;
        }

        return view('kalkulator', compact('menu', 'total'));
    }

    public function hapusItem(Request $request)
    {
        $menu = session()->get('menu', []);
        $index = $request->index;

        if (isset($menu[$index])) {
            unset($menu[$index]);
            session()->put('menu', array_values($menu)); // Reset ulang index array
        }

        return redirect('/kalkulatorGizi');
    }
}
