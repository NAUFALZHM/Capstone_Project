@extends('layouts.app')

@section('title', 'Informasi Gizi - GiziSmart')

@section('content')
<!-- Video Background -->
<div class="fixed inset-0 -z-10 overflow-hidden">
    <video autoplay muted loop playsinline class="w-full h-full object-cover">
        <source src="{{ asset('abc.mp4') }}" type="video/mp4" />
        Your browser does not support the video tag.
    </video>
    <!-- Overlay supaya teks lebih terbaca -->
    <div class="absolute inset-0 bg-green-900 bg-opacity-40"></div>
</div>

<main class="flex flex-col items-center justify-start min-h-screen w-full px-4 py-12 relative z-10">
    <h1 class="text-4xl font-extrabold text-green-200 mb-3 text-center drop-shadow-lg">Informasi Gizi</h1>
    <p class="text-green-100 text-center mb-10 max-w-2xl drop-shadow">
        Temukan informasi terpercaya seputar nutrisi untuk menunjang pola makan dan gaya hidup sehat Anda.
    </p>

    <!-- Form Pencarian -->
    <form action="{{ url('/informasi') }}" method="GET" class="flex justify-center w-full max-w-xl mb-8 shadow-md bg-white/80 rounded-xl">
        <input 
            type="text" 
            name="search" 
            placeholder="Cari informasi gizi..." 
            class="px-4 py-2 rounded-l-xl w-full border border-green-300 focus:outline-none focus:ring-2 focus:ring-green-400 text-black"
            value="{{ request('search') }}">
        <button 
            type="submit" 
            class="bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-r-xl font-medium">
            Cari
        </button>
    </form>

    <!-- Hasil Pencarian -->
    @if(request()->has('search'))
    <section class="w-full max-w-4xl bg-white/90 p-8 rounded-2xl shadow-lg border-t-4 border-blue-400">
        <h2 class="text-2xl font-bold text-blue-700 mb-6">Hasil Pencarian untuk "{{ request('search') }}":</h2>
        
        @if($results->count() > 0)
            <div class="space-y-6">
                @foreach($results as $food)
                    <div class="border border-gray-200 rounded-xl p-5 bg-blue-50 hover:bg-blue-100 transition-shadow shadow-sm">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-xl font-semibold text-green-700">{{ $food->name }}</h3>
                                <p class="text-gray-600 mt-1">{{ $food->description }}</p>
                            </div>
                            <!-- Tombol Add -->
                            <form action="{{ url('/tambah-gizi') }}" method="POST">
                                @csrf
                                <input type="hidden" name="food_id" value="{{ $food->id }}">
                                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-1.5 rounded-lg shadow">
                                    Add
                                </button>
                            </form>
                        </div>

                        <div class="grid grid-cols-4 gap-3 text-sm text-center">
                            <div class="bg-white border border-blue-200 p-3 rounded-xl shadow-sm">
                                <strong class="text-blue-600 text-lg">{{ $food->calories }}</strong><br><span class="text-xs">Kalori</span>
                            </div>
                            <div class="bg-white border border-green-200 p-3 rounded-xl shadow-sm">
                                <strong class="text-green-600 text-lg">{{ $food->protein }}g</strong><br><span class="text-xs">Protein</span>
                            </div>
                            <div class="bg-white border border-yellow-200 p-3 rounded-xl shadow-sm">
                                <strong class="text-yellow-600 text-lg">{{ $food->carbs }}g</strong><br><span class="text-xs">Karbohidrat</span>
                            </div>
                            <div class="bg-white border border-red-200 p-3 rounded-xl shadow-sm">
                                <strong class="text-red-600 text-lg">{{ $food->fat }}g</strong><br><span class="text-xs">Lemak</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-yellow-100 border border-yellow-300 text-yellow-800 p-5 rounded-lg shadow text-center mt-4">
                Tidak ditemukan hasil untuk <strong>"{{ request('search') }}"</strong>. Silakan coba dengan kata kunci yang berbeda.
            </div>
        @endif
    </section>
    @endif
</main>
@endsection
