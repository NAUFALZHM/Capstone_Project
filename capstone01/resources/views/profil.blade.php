<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - GiziSmart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white shadow-md fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <h1 class="text-xl font-bold">GiziSmart</h1>
            <div class="space-x-4">
                <a href="{{ url('/') }}" class="hover:underline">Home</a>
                <a href="{{ url('/informasi-gizi') }}" class="hover:underline">Informasi Gizi</a>
                <a href="{{ url('/hitung-gizi') }}" class="hover:underline">Hitung Gizi</a>
                <a href="{{ url('/riwayat') }}" class="hover:underline">Riwayat</a>
                <a href="{{ url('/profil') }}" class="underline font-semibold">Profil</a>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="pt-24 pb-10 px-6 md:px-0">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                
                <!-- Foto Profil -->
                <div class="flex-shrink-0">
                    <img src="https://ui-avatars.com/api/?name=Muh+Yudha+S&background=3B82F6&color=fff&size=150" alt="Foto Profil" class="w-40 h-40 rounded-full shadow-md">
                </div>

                <!-- Detail Profil -->
                <div class="w-full">
                    <h2 class="text-2xl font-bold mb-2">Muh Yudha Setiawan</h2>
                    <p class="text-sm text-gray-500 mb-4">yudha@example.com</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <p class="font-semibold">Usia:</p>
                            <p>25 tahun</p>
                        </div>
                        <div>
                            <p class="font-semibold">Berat Badan:</p>
                            <p>70 kg</p>
                        </div>
                        <div>
                            <p class="font-semibold">Tinggi Badan:</p>
                            <p>170 cm</p>
                        </div>
                        <div>
                            <p class="font-semibold">Status Gizi:</p>
                            <p>Normal</p>
                        </div>
                        <div>
                            <p class="font-semibold">Tingkat Aktivitas:</p>
                            <p>Sedang</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t mt-10 py-4 text-center text-sm text-gray-500">
        &copy; 2025 Capstone01. Hak Cipta Dilindungi.
    </footer>

</body>
</html>
