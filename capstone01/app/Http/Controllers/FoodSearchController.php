<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Food;

// class FoodSearchController extends Controller
// {
//     public function search(Request $request)
//     {
//         $query = $request->input('q');

//         if (!$query) {
//             return response()->json(['message' => 'Masukkan kata kunci pencarian'], 400);
//         }

//         // Cari berdasarkan kecocokan di kolom deskripsi makanan
//         $foods = Food::where('description', 'LIKE', '%' . $query . '%')
//             ->limit(10)
//             ->with(['nutrients']) // ambil juga data gizinya
//             ->get();

//         return response()->json($foods);
//     }
// }
