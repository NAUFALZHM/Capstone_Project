<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - GiziSmart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white shadow-md fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <h1 class="text-xl font-bold">GiziSmart</h1>
            <div class="space-x-4">
                <a href="{{ url('/') }}" class="hover:underline">Dashboard</a>
                <a href="{{ url('/informasi-gizi') }}" class="hover:underline">Informasi Gizi</a>
                <a href="{{ url('/hitung-gizi') }}" class="hover:underline">Hitung Gizi</a>
                <a href="{{ url('/riwayat') }}" class="hover:underline">Riwayat</a>
                <a href="{{ url('/profil') }}" class="hover:underline">Profil</a>
            </div>
        </div>
    </nav>

    <!-- Konten Dashboard -->
    <main class="pt-24 px-4 flex flex-col items-center flex-grow">
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

    <!-- Footer -->
    <footer class="bg-white border-t py-4 text-center text-sm text-gray-500 mt-auto">
        &copy; 2025 GiziSmart. Semua Hak Cipta Dilindungi.
    </footer>

</body>
</html>
