<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showInfo(Request $request)
    {
        $query = $request->input('search');

        $data = [
            "Kalori adalah satuan energi...",
            "IMT digunakan untuk mengukur status gizi...",
            "Asupan protein dibutuhkan untuk pertumbuhan...",
            // bisa ditambahkan data dummy atau real dari database nanti
        ];

        $results = [];
        if ($query) {
            $results = array_filter($data, function ($item) use ($query) {
                return stripos($item, $query) !== false;
            });
        }

        return view('informasi_gizi', compact('results'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

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
        //
    }
}
