<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;

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
    public function tampilTambah()
    {
        return view('tambah_gizi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated= $request->validate([
            'name' => 'required|string',
            'calories' => 'required|integer',
            'protein' => 'required|numeric',
            'carbs' => 'required|numeric',
            'fat' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        Food::create($validated);

        return redirect('/admin/tambahInforGizi')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show() {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = User::findOrFail($id);
        $product->delete();

        return redirect('/')->with('success', 'Produk berhasil dihapus.');
    }
}
