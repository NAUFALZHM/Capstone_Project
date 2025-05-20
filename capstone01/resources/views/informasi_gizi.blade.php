@extends('layouts.app')

@section('title', 'Informasi Gizi - GiziSmart')

@section('content')
<main class="px-4 flex flex-col items-center text-center flex-grow">
    <h1 class="text-4xl font-bold text-blue-700 mb-2">Informasi Gizi</h1>
    <p class="text-gray-700 mb-8 max-w-xl">
        Temukan informasi terpercaya seputar kesehatan dan nutrisi untuk menunjang gaya hidup sehat Anda.
    </p>

    <!-- Form Pencarian -->
    <form action="{{ url('/informasi') }}" method="GET" class="flex justify-center w-full max-w-xl mb-6">
        <input type="text" name="search" placeholder="Cari informasi gizi..." 
               class="px-4 py-2 border rounded-l-lg w-full focus:outline-none text-black"
               value="{{ request('search') }}">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r-lg hover:bg-blue-600">Cari</button>
    </form>

    <!-- Hasil Pencarian -->
    @if(request()->has('search'))
    <section class="w-full max-w-2xl bg-white p-6 rounded-lg shadow-md text-left">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Hasil Pencarian untuk "{{ request('search') }}":</h2>
        
        @if($results->count() > 0)
            <div class="space-y-4">
                @foreach($results as $food)
                    <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50 transition">
                        <h3 class="font-bold text-lg text-blue-600">{{ $food->name }}</h3>
                        <p class="text-gray-600 mb-3">{{ $food->description }}</p>
                        
                        <div class="grid grid-cols-4 gap-3 text-sm">
                            <div class="bg-blue-50 p-2 rounded text-center">
                                <span class="font-bold block">{{ $food->calories }}</span>
                                <span class="text-xs">Kalori</span>
                            </div>
                            <div class="bg-green-50 p-2 rounded text-center">
                                <span class="font-bold block">{{ $food->protein }}g</span>
                                <span class="text-xs">Protein</span>
                            </div>
                            <div class="bg-yellow-50 p-2 rounded text-center">
                                <span class="font-bold block">{{ $food->carbs }}g</span>
                                <span class="text-xs">Karbohidrat</span>
                            </div>
                            <div class="bg-red-50 p-2 rounded text-center">
                                <span class="font-bold block">{{ $food->fat }}g</span>
                                <span class="text-xs">Lemak</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-yellow-50 border border-yellow-200 text-yellow-800 p-4 rounded-lg">
                Tidak ditemukan hasil untuk "{{ request('search') }}". Coba dengan kata kunci lain.
            </div>
        @endif
    </section>
    @endif
</main>
@endsection