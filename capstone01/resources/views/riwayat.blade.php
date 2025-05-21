@extends('layouts.app')
@section('title', 'Riwayat Gizi - GiziSmart')
@section('content')

    <!-- Konten Riwayat -->
    <main class="pt-1 px-4 flex flex-col items-center flex-grow">
        <h1 class="text-4xl font-bold text-blue-700 mb-6 text-center">Riwayat Perhitungan Gizi</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-6xl">
            <!-- Contoh Card Riwayat -->
            @foreach($riwayat as $data)
            <div class="bg-white p-6 rounded-lg shadow-md w-full">
                <h2 class="text-xl font-bold mb-2">Perhitungan {{ $loop->iteration }}</h2>
                <p>{{ $data->created_at}}</p>
                <p><strong>kalori:</strong> {{ $data->kebutuhan_kalori_harian }} Kkal</p>
                <p><strong>IMT: </strong>{{ number_format($data->IMT, 2) }}</p>
                <p><strong>status gizi: </strong>{{ $data->status_gizi}}</p>
            </div>
            @endforeach
            <!-- Tambahkan data riwayat lain dari database di sini -->
        </div>
    </main>

@endsection
