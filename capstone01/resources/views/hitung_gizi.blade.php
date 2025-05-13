<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gizi - GiziSmart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white shadow-md fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <h1 class="text-xl font-bold">GiziSmart</h1>
            <div class="space-x-4">
                <a href="{{ url('/') }}" class="hover:underline">Home</a>
                <a href="{{ url('/informasi') }}" class="hover:underline">Informasi Gizi</a>
                <a href="{{ url('/gizi') }}" class="underline font-semibold">Hitung Gizi</a>
                <a href="{{ url('/riwayat') }}" class="hover:underline">Riwayat</a>
                <a href="{{ url('/profil') }}" class="hover:underline">Profil</a>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="pt-24 pb-10 px-6 md:px-0">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Form Perhitungan -->
            
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-4">Hitung Gizi Anda</h2>
                <form method="POST" action="{{ url('/gizi') }}">
                    @csrf
                    <!-- Usia -->
                    <div class="mb-4">
                        <label class="block mb-1 font-semibold">Usia (tahun):</label>
                        <input type="number" name="age" class="w-full p-2 border rounded" value={{ old('age', auth()->user()->age) }}> 
                    </div>
                    <!-- Gender -->
                    <div class="mb-4">
                        <label class="block mb-1 font-semibold">Jenis Kelamin:</label>
                        <select name="gender" class="w-full p-2 border rounded">
                            {{-- <option value="male" {{ old('gender', auth()->user()->gender) == 'male' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="female" {{ old('gender', auth()->user()->gender) == 'female' ? 'selected' : '' }}>Perempuan</option> --}}
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Perempuan</option>

                        </select>
                    </div>
                    <!-- Berat -->
                    <div class="mb-4">
                        <label class="block mb-1 font-semibold">Berat Badan (kg):</label>
                        <input type="number" name="weight" class="w-full p-2 border rounded" value={{ old('weight', auth()->user()->weight) }}> 
                    </div>
                    <!-- Tinggi -->
                    <div class="mb-4">
                        <label class="block mb-1 font-semibold">Tinggi Badan (cm):</label>
                        <input type="number" name="height" class="w-full p-2 border rounded" value={{ old('height', auth()->user()->height) }}> 
                    </div>
                    <!-- Aktivitas -->
                    <div class="mb-6">
                        <label class="block mb-1 font-semibold">Aktivitas Harian:</label>
                        <select name="activity_level" class="w-full p-2 border rounded">
                            {{-- <option value="rendah" {{ old('activity_level', auth()->user()->activity_level) == 'rendah' ? 'selected' : '' }}>Rendah</option>
                            <option value="sedang" {{ old('activity_level', auth()->user()->activity_level) == 'sedang' ? 'selected' : '' }}>Sedang</option>
                            <option value="tinggi" {{ old('activity_level', auth()->user()->activity_level) == 'tinggi' ? 'selected' : '' }}>Tinggi</option> --}}
                            <option value="rendah" {{ old('activity_level') == 'rendah' ? 'selected' : '' }}>Rendah</option>
                            <option value="sedang" {{ old('activity_level') == 'sedang' ? 'selected' : '' }}>Sedang</option>
                            <option value="tinggi" {{ old('activity_level') == 'tinggi' ? 'selected' : '' }}>Tinggi</option>

                        </select>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white w-full p-2 rounded hover:bg-blue-600">Hitung</button>
                </form>
                
                <!-- {{-- <form>
                    <div class="mb-4">
                        <label class="block mb-1 font-semibold">Usia (tahun):</label>
                        <input type="number" class="w-full p-2 border rounded" placeholder="Masukkan usia Anda">
                    </div>
                    <div class="mb-4">
                        <label class="block mb-1 font-semibold">Berat Badan (kg):</label>
                        <input type="number" class="w-full p-2 border rounded" placeholder="Masukkan berat badan Anda">
                    </div>
                    <div class="mb-4">
                        <label class="block mb-1 font-semibold">Tinggi Badan (cm):</label>
                        <input type="number" class="w-full p-2 border rounded" placeholder="Masukkan tinggi badan Anda">
                    </div>
                    <div class="mb-6">
                        <label class="block mb-1 font-semibold">Aktivitas Harian:</label>
                        <select class="w-full p-2 border rounded">
                            <option value="rendah">Rendah</option>
                            <option value="sedang">Sedang</option>
                            <option value="tinggi">Tinggi</option>
                        </select>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white w-full p-2 rounded hover:bg-blue-600">Hitung</button>
                </form> --}} -->
            </div>

            <!-- Hasil -->
            <!-- Hasil -->
            @if(isset($kalori) && isset($imt) && isset($status_gizi))
                <div class="mt-6 p-4 border rounded bg-gray-100">
                    <h2 class="text-xl font-semibold mb-2">Hasil Perhitungan:</h2>
                    <p><strong>Kebutuhan Kalori Harian:</strong> {{ $kalori }} kkal</p>
                    <p><strong>Indeks Massa Tubuh (IMT):</strong> {{ $imt }}</p>
                    <p><strong>Status Gizi:</strong> {{ $status_gizi }}</p>
                </div>
            @endif

            {{-- @if (isset($kalori))
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-4 text-center">Hasil Perhitungan</h2>
                <p class="mb-4"><strong>Kebutuhan Kalori:</strong> {{ $kalori }} kcal/hari</p>
                <p class="mb-4"><strong>Indeks Massa Tubuh (IMT):</strong> {{ $imt }}</p>
                <p class="mb-4"><strong>Status Gizi:</strong> {{ $status_gizi }}</p>
            </div>
            @endif --}}

            {{-- <div class="bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-4 text-center">Hasil Perhitungan</h2>
                <p class="mb-4"><strong>Kebutuhan Kalori:</strong> <span id="kalori">-</span> kcal/hari</p>
                <p class="mb-4"><strong>Indeks Massa Tubuh (IMT):</strong> <span id="imt">-</span></p>
                <p class="mb-4"><strong>Status Gizi:</strong> <span id="status-gizi">-</span></p>
            </div> --}}

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t mt-10 py-4 text-center text-sm text-gray-500">
        &copy; 2025 Capstone01. Hak Cipta Dilindungi.
    </footer>

</body>
</html>
