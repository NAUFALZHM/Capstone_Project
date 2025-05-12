<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat - GiziSmart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white shadow-md fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <h1 class="text-xl font-bold">GiziSmart</h1>
            <div class="space-x-4">
                <a href="{{ url('/') }}" class="hover:underline">Home</a>
                <a href="{{ url('/informasi-gizi') }}" class="hover:underline">Informasi Gizi</a>
                <a href="{{ url('/hitung-gizi') }}" class="hover:underline">Hitung Gizi</a>
                <a href="{{ url('/riwayat') }}" class="underline font-semibold">Riwayat</a>
                <a href="{{ url('/profil') }}" class="hover:underline">Profil</a>
            </div>
        </div>
    </nav>

    <!-- Konten Riwayat -->
    <main class="pt-24 px-4 flex flex-col items-center flex-grow">
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

    <!-- Footer -->
    <footer class="bg-white border-t py-4 text-center text-sm text-gray-500 mt-auto">
        &copy; 2025 GiziSmart. Semua Hak Cipta Dilindungi.
    </footer>

</body>
</html>
