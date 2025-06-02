@extends('layouts.app')

@section('title', 'Hitung Gizi - GiziSmart')
@section('content')
<!-- Background full layar fixed -->
<div
    class="fixed inset-0 -z-10 bg-cover bg-center"
    style="background-image: url('{{ asset('nft.jpg') }}');"
></div>

<!-- Konten utama dengan overlay ringan -->
<div
    class="py-12 px-4 md:px-0 min-h-screen flex items-center justify-center relative overflow-hidden"
>
    <!-- Overlay semi-transparent putih -->
    <div class="absolute inset-0 bg-white/30"></div>

    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 w-full relative z-10">
        <!-- Form Card -->
        <div
            class="bg-white rounded-3xl shadow-2xl border border-gray-200 p-10
                   max-w-md mx-auto
                   transform hover:scale-[1.03] transition-transform duration-300 ease-in-out"
        >
            <div class="flex items-center gap-3 mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-3 0-5 1.5-5 4.5S9 17 12 17s5-1.5 5-4.5S15 8 12 8z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 12v.01" />
                </svg>
                <h2 class="text-4xl font-extrabold text-green-700 tracking-tight select-none">Hitung Gizi Anda</h2>
            </div>

            <form method="POST" action="{{ url('/gizi') }}" class="space-y-6 text-gray-700">
                @csrf

                <div>
                    <label class="block mb-2 font-semibold text-lg">Usia (tahun):</label>
                    <input required type="number" name="age" placeholder="Masukkan usia Anda" autocomplete="off" value="{{ old('age', auth()->user()->age) }}"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-lg
                               focus:outline-none focus:ring-4 focus:ring-green-300 transition" />
                </div>

                <div>
                    <label class="block mb-2 font-semibold text-lg">Jenis Kelamin:</label>
                    <select required name="gender" class="w-full rounded-lg border border-gray-300 px-4 py-3 text-lg
                                           focus:outline-none focus:ring-4 focus:ring-green-300 transition">
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="male" {{ old('gender', auth()->user()->gender) == 'male' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="female" {{ old('gender', auth()->user()->gender) == 'female' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-2 font-semibold text-lg">Berat Badan (kg):</label>
                    <input required type="number" name="weight" placeholder="Masukkan berat badan Anda" autocomplete="off" value="{{ old('weight', auth()->user()->weight) }}"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-lg
                               focus:outline-none focus:ring-4 focus:ring-green-300 transition" />
                </div>

                <div>
                    <label class="block mb-2 font-semibold text-lg">Tinggi Badan (cm):</label>
                    <input required type="number" name="height" placeholder="Masukkan tinggi badan Anda" autocomplete="off" value="{{ old('height', auth()->user()->height) }}"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-lg
                               focus:outline-none focus:ring-4 focus:ring-green-300 transition" />
                </div>

                <div>
                    <label class="block mb-2 font-semibold text-lg">Aktivitas Harian:</label>
                    <select required name="activity_level" class="w-full rounded-lg border border-gray-300 px-4 py-3 text-lg
                                           focus:outline-none focus:ring-4 focus:ring-green-300 transition">
                        <option value="" disabled {{ old('activity_level', auth()->user()->activity_level) == null ? 'selected' : '' }}>Pilih Level Aktivitas</option>
                        <option value="rendah" {{ old('activity_level', auth()->user()->activity_level) == 'rendah' ? 'selected' : '' }}>Rendah</option>
                        <option value="sedang" {{ old('activity_level', auth()->user()->activity_level) == 'sedang' ? 'selected' : '' }}>Sedang</option>
                        <option value="tinggi" {{ old('activity_level', auth()->user()->activity_level) == 'tinggi' ? 'selected' : '' }}>Tinggi</option>
                    </select>
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-green-600 to-green-700 text-white font-extrabold
                           py-4 rounded-2xl text-xl hover:from-green-700 hover:to-green-800
                           shadow-lg shadow-green-400/50 transition-all duration-300">
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
