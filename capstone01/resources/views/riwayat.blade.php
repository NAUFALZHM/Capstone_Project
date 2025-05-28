@extends('layouts.app')
@section('title', 'Riwayat Gizi - GiziSmart')
@section('content')

<main class="pt-8 px-6 md:px-12 flex flex-col items-center flex-grow min-h-[calc(100vh-6rem)] bg-gradient-to-tr from-blue-50 via-white to-blue-50">
    <h1 class="text-5xl font-extrabold text-blue-700 mb-12 text-center drop-shadow-md">
        Riwayat Perhitungan Gizi
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl w-full">
        @foreach($riwayat as $data)
        <div
            class="bg-white rounded-3xl shadow-lg border border-gray-200 p-8
                   flex flex-col justify-between
                   hover:shadow-2xl transition-shadow duration-300 cursor-pointer"
            title="Klik untuk detail"
        >
            <div>
                <h2 class="text-2xl font-bold mb-3 text-blue-600">
                    Riwayat {{ $loop->iteration }}
                </h2>
                <p class="text-gray-500 text-sm mb-6">
                    {{ $data->created_at->format('d M Y, H:i') }}
                </p>

                <div class="space-y-3 text-gray-700">
                    <p><span class="font-semibold text-gray-900">Kebutuhan Kalori Harian:</span> <span class="text-indigo-600">{{ $data->kebutuhan_kalori_harian }} kkal</span></p>
                    <p><span class="font-semibold text-gray-900">Indeks Massa Tubuh (IMT):</span> <span class="text-indigo-600">{{ number_format($data->IMT, 2) }}</span></p>
                    <p><span class="font-semibold text-gray-900">Status Gizi:</span> <span class="text-indigo-600 capitalize">{{ $data->status_gizi }}</span></p>
                </div>
            </div>

            {{-- Optional: Tombol detail atau icon --}}
            {{-- <div class="mt-6 text-right">
                <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">Lihat Detail &rarr;</a>
            </div> --}}
        </div>
        @endforeach
    </div>
</main>

@endsection
