@extends('layouts.app')
@section('title', 'Profil - GiziSmart')
@section('content')

<!-- Konten Utama Full Layar -->
<div class="min-h-screen w-full flex justify-center items-start bg-gray-50 py-10 px-6">
    <div class="w-full max-w-4xl bg-white rounded-lg shadow-lg p-8">

        <form class="flex flex-col md:flex-row items-start gap-8" method="POST" action="{{ url('/profil') }}">
            @csrf

            <!-- Hapus Foto Profil (tidak ada div foto) -->

            <!-- Detail Profil -->
            <div class="w-full">
                <div>
                    <label class="font-semibold">Nama:</label>
                    <input
                        type="text"
                        name="name"
                        class="border border-gray-300 rounded-md p-2 mt-1 w-full"
                        value="{{ old('name', auth()->user()->name) }}"
                    />
                </div>
                <p class="text-sm text-gray-500 mb-4">{{ old('email', auth()->user()->email) }}</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="font-semibold">Usia (tahun):</label><br>
                        <input
                            type="number"
                            name="age"
                            class="border border-gray-300 rounded-md p-2 mt-1 w-full"
                            value="{{ old('age', auth()->user()->age) }}"
                        />
                    </div>
                    <div>
                        <label class="font-semibold">Berat Badan (kg):</label><br>
                        <input
                            type="number"
                            name="weight"
                            class="border border-gray-300 rounded-md p-2 mt-1 w-full"
                            value="{{ old('weight', auth()->user()->weight) }}"
                        />
                    </div>
                    <div>
                        <label class="font-semibold">Tinggi Badan (cm):</label><br>
                        <input
                            type="number"
                            name="height"
                            class="border border-gray-300 rounded-md p-2 mt-1 w-full"
                            value="{{ old('height', auth()->user()->height) }}"
                        />
                    </div>
                    <div>
                        <label class="font-semibold">Tingkat Aktivitas:</label><br>
                        <select
                            name="activity_level"
                            class="border border-gray-300 rounded-md p-2 mt-1 w-full"
                            style="max-width: 12.43rem"
                        >
                            <option value="rendah" {{ old('activity_level') == 'rendah' ? 'selected' : '' }}>Rendah</option>
                            <option value="sedang" {{ old('activity_level') == 'sedang' ? 'selected' : '' }}>Sedang</option>
                            <option value="tinggi" {{ old('activity_level') == 'tinggi' ? 'selected' : '' }}>Tinggi</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="mt-6">
            @csrf
            <button
                class="border px-4 py-2 rounded-md text-sm hover:bg-gray-100 transition"
                :href="route('logout')"
                onclick="event.preventDefault(); this.closest('form').submit();"
            >
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</div>

@endsection
