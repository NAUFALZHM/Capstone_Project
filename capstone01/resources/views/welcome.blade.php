@extends('layouts.app')
@section('title', 'Dashboard Gizi - GiziSmart')

@section('content')
    <!-- Background Image -->
    <div class="fixed inset-0 z-0 overflow-hidden">
        <img src="{{ asset('aaa.png') }}" alt="Background" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/70"></div>
    </div>

    <!-- Konten Dashboard -->
    <main class="relative pt-16 px-4 flex flex-col items-center flex-grow z-10 text-white">
        <!-- Sambutan -->
        <h1 class="text-5xl md:text-6xl font-extrabold mb-4 text-center drop-shadow-lg tracking-tight">Selamat Datang di <span class="text-green-400">GiziSmart</span></h1>
        <p class="text-center text-lg md:text-xl mb-12 max-w-4xl text-gray-200 drop-shadow">
            SmartGizi adalah platform pintar yang membantu Anda menghitung kebutuhan gizi harian berdasarkan usia, berat badan,
            tinggi badan, dan aktivitas fisik. Jadikan hidup Anda lebih sehat bersama kami.
        </p>

        <!-- Card Informasi Gizi -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-7xl px-4 pb-16">
            @php
                $cards = [
                    ['img' => 'karbo.jpg', 'title' => 'Pentingnya Karbohidrat', 'desc' => 'Karbohidrat adalah sumber energi utama tubuh. Pilih karbohidrat kompleks seperti nasi merah, oat, dan kentang.'],
                    ['img' => 'protein.jpg', 'title' => 'Manfaat Protein', 'desc' => 'Protein membantu membangun dan memperbaiki jaringan tubuh. Sumbernya termasuk telur, ikan, dan tahu.'],
                    ['img' => 'serat.png', 'title' => 'Serat untuk Pencernaan', 'desc' => 'Serat menjaga sistem pencernaan tetap sehat. Temukan dalam buah-buahan, sayuran, dan biji-bijian.'],
                    ['img' => 'vitamin.jpg', 'title' => 'Asupan Vitamin Harian', 'desc' => 'Vitamin penting untuk sistem imun dan metabolisme. Perbanyak konsumsi sayur dan buah berwarna cerah.'],
                    ['img' => 'aer.jpg', 'title' => 'Mineral Esensial', 'desc' => 'Mineral seperti zat besi dan kalsium sangat penting untuk fungsi tubuh dan kesehatan tulang.'],
                    ['img' => 'dehidrasi.jpg', 'title' => 'Air dan Hidrasi', 'desc' => 'Air menjaga tubuh tetap segar dan mendukung proses metabolisme. Minumlah minimal 8 gelas sehari.'],
                ];
            @endphp

            @foreach($cards as $card)
                <div class="bg-white/90 backdrop-blur-md rounded-3xl shadow-xl overflow-hidden transition hover:scale-105 hover:shadow-2xl duration-300 ease-in-out">
                    <img src="{{ asset($card['img']) }}" alt="{{ $card['title'] }}" class="w-full h-40 object-cover">
                    <div class="p-5 text-gray-800">
                        <h3 class="text-xl font-semibold mb-2 text-green-700">{{ $card['title'] }}</h3>
                        <p class="text-sm text-gray-600">{{ $card['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
