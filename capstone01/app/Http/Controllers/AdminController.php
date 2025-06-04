<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin_gizi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('upload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'calories' => 'required',
            'protein' => 'required',
            'carbs' => 'required',
            'fat' => 'required',

        ]);
        $food = Food::create([
            'name' => $request->name,
            'calories' => $request->calories,
            'protein' => $request->protein,
            'carbs' => $request->carbs,
            'fat' => $request->fat,
            'description' => $request->description
        ]);

        $user = Auth::user();
        if ($user->role === 'admin') {
            return redirect()->intended('/');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show() {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            $makanan = Food::findOrFail($id);
            return view('edit', compact('makanan'));
        }
        abort(403, 'Unauthorized');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            $makanan = Food::findOrFail($id); // Ambil data lama
            $makanan->update([
                'name' => $request->name,
                'description' => $request->description,
                'calories' => $request->calories,
                'protein' => $request->protein,
                'carbs' => $request->carbs,
                'fat' => $request->fat,
            ]);
            return redirect('/');
        }
        abort(403, 'Unauthorized');
    }

    public function destroy(string $id)
    {
        $User = User::findOrFail($id);
        $User->delete();

        return redirect('/')->with('success', 'Produk berhasil dihapus.');
    }
}
