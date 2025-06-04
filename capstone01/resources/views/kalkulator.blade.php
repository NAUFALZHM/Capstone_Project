@extends('layouts.app')

@section('title', 'Kalkulator Gizi')

@section('content')
<div class="p-6 max-w-4xl mx-auto bg-white shadow rounded-xl mt-10 relative">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold text-green-700">Kalkulator Gizi</h2>
        <a href="{{ url('/informasi') }}">
            <button class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-1.5 rounded-lg shadow">
                Tambahkan makanan
            </button>
        </a>
    </div>
    
    @if(count($menu) > 0)
        <ul class="space-y-3 mb-6">
            @foreach($menu as $index => $item)
                <li class="flex justify-between items-center bg-blue-50 p-4 rounded-lg shadow-sm">
                    <div>
                        <strong>{{ $item->name }}</strong>
                        <p class="text-sm text-gray-600">{{ $item->description }}</p>
                    </div>
                    <form action="/hapusItem" method="POST">
                        @csrf
                        <input type="hidden" name="index" value="{{ $index }}">
                        <button class="text-red-600 hover:underline">Hapus</button>
                    </form>
                </li>
            @endforeach
        </ul>

        <div class="grid grid-cols-4 gap-4 text-center">
            <div class="p-4 bg-white border rounded shadow">
                <p class="text-sm text-gray-600">Kalori</p>
                <p class="text-xl text-blue-600 font-bold">{{ $total['calories'] }}</p>
            </div>
            <div class="p-4 bg-white border rounded shadow">
                <p class="text-sm text-gray-600">Protein</p>
                <p class="text-xl text-green-600 font-bold">{{ $total['protein'] }}g</p>
            </div>
            <div class="p-4 bg-white border rounded shadow">
                <p class="text-sm text-gray-600">Karbo</p>
                <p class="text-xl text-yellow-600 font-bold">{{ $total['carbs'] }}g</p>
            </div>
            <div class="p-4 bg-white border rounded shadow">
                <p class="text-sm text-gray-600">Lemak</p>
                <p class="text-xl text-red-600 font-bold">{{ $total['fat'] }}g</p>
            </div>
        </div>
    @else
        <p class="text-gray-600">Belum ada makanan yang ditambahkan.</p>
    @endif
</div>
@endsection
