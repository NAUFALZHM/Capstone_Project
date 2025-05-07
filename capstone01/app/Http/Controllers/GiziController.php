<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GiziController extends Controller
{
    public function showForm()
    {
        return view('hitung-gizi');
    }

    public function hitung(Request $request)
    {
        // $user = Auth::user();

        $validated = $request->validate([
            'age' => 'required|numeric|min:1',
            'weight' => 'required|numeric|min:1',
            'height' => 'required|numeric|min:1',
            'activity_level' => 'required|in:rendah,sedang,tinggi',
            'gender' => 'required|in:male,female',
        ]);

        // $user->update($validated);

        // $calories = $user->calculateCalories();
        // $imt = $user->calculateIMT();
        // $statusGizi = $user->statusGizi();

        $calories = $this->calculateCalories($validated);
        $imt = $this->calculateIMT($validated);
        $statusGizi = $this->statusGizi($imt);

        // if ($calories === null || $imt === null || $statusGizi === null) {
        //     return back()->withErrors(['error' => 'Data tidak lengkap untuk menghitung kalori, IMT, atau status gizi.']);
        // }

        return view('hitung-gizi', [
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
}
