<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Gizi - GiziSmart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white shadow-md fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <h1 class="text-xl font-bold">GiziSmart</h1>
            <div class="space-x-4">
                <a href="{{ url('/') }}" class="hover:underline">Home</a>
                <a href="{{ url('/informasi-gizi') }}" class="underline font-semibold">Informasi Gizi</a>
                <a href="{{ url('/hitung-gizi') }}" class="hover:underline">Hitung Gizi</a>
                <a href="{{ url('/riwayat') }}" class="hover:underline">Riwayat</a>
                <a href="{{ url('/profile') }}" class="hover:underline">Profile</a>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <main class="pt-24 px-4 flex flex-col items-center text-center flex-grow">
        <h1 class="text-4xl font-bold text-blue-700 mb-2">Informasi Gizi</h1>
        <p class="text-gray-700 mb-8 max-w-xl">
            Temukan informasi terpercaya seputar kesehatan dan nutrisi untuk menunjang gaya hidup sehat Anda.
        </p>

        <!-- Form Pencarian -->
        <form action="{{ url('/informasi-gizi') }}" method="GET" class="flex justify-center w-full max-w-xl mb-6">
            <input type="text" name="search" placeholder="Cari informasi gizi..." class="px-4 py-2 border rounded-l-lg w-full focus:outline-none text-black">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r-lg hover:bg-blue-600">Cari</button>
        </form>

        <!-- Hasil Pencarian -->
        <section class="w-full max-w-2xl bg-white p-6 rounded-lg shadow-md text-left">
            <h2 class="text-xl font-semibold text-gray-800">Hasil Pencarian:</h2>
            @if(isset($results))
                @if(count($results) > 0)
                    <ul class="mt-4 list-disc list-inside text-gray-700">
                        @foreach($results as $result)
                            <li class="py-2 border-b border-gray-200">{{ $result }}</li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-red-500 mt-4">Tidak ada hasil yang ditemukan.</p>
                @endif
            @endif
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t py-4 text-center text-sm text-gray-500 mt-auto">
        &copy; 2025 GiziSmart. Semua Hak Cipta Dilindungi.
    </footer>

</body>
</html>
