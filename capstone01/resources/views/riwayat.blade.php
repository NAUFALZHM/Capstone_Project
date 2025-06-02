@extends('layouts.app')
@section('title', 'Riwayat Gizi - GiziSmart')

@section('content')
    <!-- Background Image -->
    <div class="fixed inset-0 z-0 overflow-hidden">
        <img src="{{ asset('rr.jpg') }}" alt="Background" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/70"></div>
    </div>

    <!-- Konten Riwayat -->
    <main class="relative pt-16 px-4 flex flex-col items-center flex-grow z-10 text-white min-h-screen">
        <h1 class="text-5xl font-extrabold mb-8 text-center drop-shadow-lg tracking-tight">Riwayat <span class="text-green-400">Perhitungan Gizi</span></h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-7xl px-4 pb-16">
            @foreach($riwayat as $data)
                <div
                    class="bg-white rounded-3xl shadow-xl p-8 text-gray-800 transition transform hover:scale-105 hover:shadow-2xl duration-300 ease-in-out cursor-pointer"
                    title="Klik untuk detail"
                >
                    <h2 class="text-2xl font-bold mb-3 text-green-700">Riwayat {{ $loop->iteration }}</h2>
                    <p class="text-gray-500 text-sm mb-6">{{ $data->created_at->format('d M Y, H:i') }}</p>

                    <div class="space-y-3">
                        <p><span class="font-semibold">Kebutuhan Kalori Harian:</span> <span class="text-indigo-600">{{ $data->kebutuhan_kalori_harian }} kkal</span></p>
                        <p><span class="font-semibold">Indeks Massa Tubuh (IMT):</span> <span class="text-indigo-600">{{ number_format($data->IMT, 2) }}</span></p>
                        <p><span class="font-semibold">Status Gizi:</span> <span class="text-indigo-600 capitalize">{{ $data->status_gizi }}</span></p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <!-- Footer tetap di atas background, jadi kasih z-index lebih tinggi -->
    <footer class="relative z-20">
        @include('layouts.footer')
    </footer>
@endsection
    