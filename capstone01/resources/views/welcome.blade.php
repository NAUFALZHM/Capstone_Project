@extends('layouts.app')
@section('title', 'Dashboard Gizi - GiziSmart')
{{-- @section('description', 'Dashboard GiziSmart - Selamat datang di GiziSmart, platform untuk menghitung kebutuhan gizi harian Anda dan mendapatkan informasi gizi yang akurat.') --}}
@section('content')
    <!-- Background Video -->
    <div class="fixed inset-0 z-0 overflow-hidden">
        <video autoplay muted loop class="w-full h-full object-cover">
            <source src="{{ asset('abc.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    </div>

    <!-- Konten Dashboard -->
    <main class="relative pt-0 px-4 flex flex-col items-center flex-grow z-10">
        <!-- Sambutan -->
        <h1 class="text-4xl md:text-5xl font-bold text-blue-100 mb-4 text-center drop-shadow-md">Selamat Datang di GiziSmart</h1>
        <p class="text-center text-white text-lg mb-10 max-w-3xl drop-shadow-sm">
            SmartGizi adalah platform pintar yang membantu Anda menghitung kebutuhan gizi harian berdasarkan usia, berat badan,
            tinggi badan, dan aktivitas fisik. Jadikan hidup Anda lebih sehat bersama kami.
        </p>

        <!-- Grid untuk 2 Video Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 w-full max-w-6xl">
            <!-- Card Video 1 -->
            <div class="bg-white/80 backdrop-blur-md p-4 rounded-lg shadow-lg w-full">
                <h2 class="text-xl font-semibold text-center mb-4 text-gray-800">Video 1</h2>
                <div class="aspect-w-16 aspect-h-9">
                    <video class="w-full h-full rounded-lg" controls>
                        <source src="{{ asset('abb.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <!-- Card Video 2 -->
            <div class="bg-white/80 backdrop-blur-md p-4 rounded-lg shadow-lg w-full">
                <h2 class="text-xl font-semibold text-center mb-4 text-gray-800">Video 2</h2>
                <div class="aspect-w-16 aspect-h-9">
                    <video class="w-full h-full rounded-lg" controls>
                        <source src="{{ asset('abb.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </main>
@endsection


