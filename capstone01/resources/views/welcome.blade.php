@extends('layouts.app')
@section('title', 'Dashboard Gizi - GiziSmart')
{{-- @section('description', 'Dashboard GiziSmart - Selamat datang di GiziSmart, platform untuk menghitung kebutuhan gizi harian Anda dan mendapatkan informasi gizi yang akurat.') --}}
@section('content')
    <!-- Konten Dashboard -->
    <main class="pt-0 px-4 flex flex-col items-center flex-grow">
        <h1 class="text-4xl font-bold text-blue-700 mb-6 text-center">Selamat Datang di GiziSmart</h1>

        <!-- Grid untuk 2 Video Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 w-full max-w-6xl">
            
            <!-- Card Video 1 -->
            <div class="bg-white p-4 rounded-lg shadow-lg w-full">
                <h2 class="text-xl font-semibold text-center mb-4">Video 1</h2>
                <div class="aspect-w-16 aspect-h-9">
                    <video class="w-full h-full rounded-lg" controls>
                        <source src="{{ asset('abb.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <!-- Card Video 2 -->
            <div class="bg-white p-4 rounded-lg shadow-lg w-full">
                <h2 class="text-xl font-semibold text-center mb-4">Video 2</h2>
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
