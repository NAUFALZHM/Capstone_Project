@extends('layouts.app')

@section('title', 'Hitung Gizi - GiziSmart')
@section('content')
<div class="py-12 px-4 md:px-0 bg-gradient-to-tr from-blue-50 via-white to-blue-50 min-h-[calc(100vh-6rem)] flex items-center justify-center">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 w-full">

        <!-- Form Card (kecil, span 1 col) -->
        <div
            class="bg-white rounded-3xl shadow-2xl border border-gray-200 p-8
                   max-w-md mx-auto
                   transform hover:scale-[1.02] transition-transform duration-300 ease-in-out"
        >
            <h2 class="text-3xl font-extrabold mb-8 text-blue-700 drop-shadow-md flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a3 3 0 013-3h5a3 3 0 013 3v6" />
                </svg>
                Hitung Gizi Anda
            </h2>

            <form method="POST" action="{{ url('/gizi') }}" class="space-y-6 text-gray-700">
                @csrf

                <div>
                    <label class="block mb-2 font-semibold text-lg">Usia (tahun):</label>
                    <input type="number" name="age" placeholder="Masukkan usia Anda" autocomplete="off"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-lg 
                               focus:outline-none focus:ring-4 focus:ring-blue-300 transition" />
                </div>

                <div>
                    <label class="block mb-2 font-semibold text-lg">Jenis Kelamin:</label>
                    <select name="gender" class="w-full rounded-lg border border-gray-300 px-4 py-3 text-lg
                                           focus:outline-none focus:ring-4 focus:ring-blue-300 transition">
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="male">Laki-laki</option>
                        <option value="female">Perempuan</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-2 font-semibold text-lg">Berat Badan (kg):</label>
                    <input type="number" name="weight" placeholder="Masukkan berat badan Anda" autocomplete="off"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-lg
                               focus:outline-none focus:ring-4 focus:ring-blue-300 transition" />
                </div>

                <div>
                    <label class="block mb-2 font-semibold text-lg">Tinggi Badan (cm):</label>
                    <input type="number" name="height" placeholder="Masukkan tinggi badan Anda" autocomplete="off"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-lg
                               focus:outline-none focus:ring-4 focus:ring-blue-300 transition" />
                </div>

                <div>
                    <label class="block mb-2 font-semibold text-lg">Aktivitas Harian:</label>
                    <select name="activity_level" class="w-full rounded-lg border border-gray-300 px-4 py-3 text-lg
                                           focus:outline-none focus:ring-4 focus:ring-blue-300 transition">
                        <option value="" disabled selected>Pilih Level Aktivitas</option>
                        <option value="rendah">Rendah</option>
                        <option value="sedang">Sedang</option>
                        <option value="tinggi">Tinggi</option>
                    </select>
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-extrabold
                           py-4 rounded-2xl text-xl hover:from-blue-700 hover:to-indigo-700
                           shadow-lg shadow-blue-300/50 transition-all duration-300">
                    Hitung Sekarang
                </button>
            </form>
        </div>

        <!-- Result Card -->
        @if(isset($kalori) && isset($imt) && isset($status_gizi))
        <div
            class="bg-gradient-to-tr from-green-100 via-white to-green-100 rounded-3xl shadow-2xl border border-green-300 p-10
                   flex flex-col justify-center text-gray-800
                   transform hover:scale-[1.03] transition-transform duration-300 ease-in-out"
        >
            <h2 class="text-3xl font-extrabold mb-6 text-green-700 drop-shadow-md">Hasil Perhitungan</h2>
            <div class="space-y-6 text-lg leading-relaxed">
                <p><span class="font-semibold">Kebutuhan Kalori Harian:</span> <span class="text-green-800 text-xl">{{ $kalori }} kkal</span></p>
                <p><span class="font-semibold">Indeks Massa Tubuh (IMT):</span> <span class="text-green-800 text-xl">{{ $imt }}</span></p>
                <p><span class="font-semibold">Status Gizi:</span> <span class="text-green-800 text-xl">{{ $status_gizi }}</span></p>
            </div>
        </div>
        @endif

    </div>
</div>
@endsection
