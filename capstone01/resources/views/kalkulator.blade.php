@extends('layouts.app')

@section('title', 'Kalkulator Gizi - GiziSmart')

@section('content')
<main class="px-4 py-8 bg-gradient-to-br from-green-50 via-white to-blue-50 flex flex-col items-center min-h-screen">
    <h1 class="text-4xl font-extrabold text-green-700 mb-3">Kalkulator Gizi</h1>
    <p class="text-gray-600 text-center mb-10 max-w-2xl">
        Tambahkan menu makanan harian Anda dan hitung total nilai gizinya untuk menjaga pola makan seimbang.
    </p>

    <!-- Grid Menu Gizi -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-6xl">
        @for ($i = 1; $i <= 3; $i++)
        <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-green-400 hover:shadow-xl transition">
            <div>
                <h3 class="text-xl font-bold text-green-600 mb-1">Menu Gizi {{ $i }}</h3>
                <p class="text-sm text-gray-500 mb-4">Deskripsi singkat tentang menu makanan bergizi yang seimbang.</p>

                <div class="grid grid-cols-4 gap-3 text-sm">
                    <div class="bg-blue-100 p-3 rounded-lg text-center shadow-inner">
                        <strong class="text-blue-700">250</strong><br><span class="text-xs">Kalori</span>
                    </div>
                    <div class="bg-green-100 p-3 rounded-lg text-center shadow-inner">
                        <strong class="text-green-700">15g</strong><br><span class="text-xs">Protein</span>
                    </div>
                    <div class="bg-yellow-100 p-3 rounded-lg text-center shadow-inner">
                        <strong class="text-yellow-700">30g</strong><br><span class="text-xs">Karbo</span>
                    </div>
                    <div class="bg-red-100 p-3 rounded-lg text-center shadow-inner">
                        <strong class="text-red-700">10g</strong><br><span class="text-xs">Lemak</span>
                    </div>
                </div>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex justify-between mt-5">
                <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-lg text-sm w-1/3">Add</button>
                <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm w-1/3">Hitung</button>
                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg text-sm w-1/3">Hapus</button>
            </div>
        </div>
        @endfor
    </div>

    <!-- Total Gizi Hari Ini -->
    <div class="mt-12 w-full max-w-3xl bg-white p-8 rounded-2xl shadow-lg border-t-4 border-blue-400">
        <h2 class="text-2xl font-bold text-blue-700 mb-5 text-center">Total Gizi Hari Ini</h2>
        <div class="grid grid-cols-4 gap-4 text-sm text-center">
            <div class="bg-blue-50 p-4 rounded-xl shadow-inner">
                <strong class="text-blue-700 text-lg">750</strong><br><span>Kalori</span>
            </div>
            <div class="bg-green-50 p-4 rounded-xl shadow-inner">
                <strong class="text-green-700 text-lg">45g</strong><br><span>Protein</span>
            </div>
            <div class="bg-yellow-50 p-4 rounded-xl shadow-inner">
                <strong class="text-yellow-700 text-lg">90g</strong><br><span>Karbo</span>
            </div>
            <div class="bg-red-50 p-4 rounded-xl shadow-inner">
                <strong class="text-red-700 text-lg">30g</strong><br><span>Lemak</span>
            </div>
        </div>
    </div>
</main>
@endsection
