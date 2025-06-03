@extends('layouts.app')
@section('title', 'Profil - GiziSmart')
@section('content')

<div class="min-h-screen w-full flex justify-center items-start bg-green-50 py-12 px-6">
    <div class="w-full max-w-4xl bg-white rounded-2xl shadow-lg p-10">

        <h1 class="text-3xl font-extrabold text-green-700 mb-8 text-center tracking-wide">
            Profil Pengguna
        </h1>

        <form id="profilForm" class="flex flex-col md:flex-row gap-10" method="POST" action="{{ url('/profil') }}">
            @csrf
            @method('PATCH')

            <div class="flex-1 space-y-6">
                <div>
                    <label for="name" class="block text-green-800 font-semibold mb-2 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.221 0 4.324.576 6.165 1.59M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Nama Lengkap
                    </label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="w-full border border-green-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent bg-green-50 text-green-900 font-medium"
                        value="{{ old('name', auth()->user()->name) }}"
                        readonly
                    />
                </div>

                <p class="text-sm text-green-600 italic">{{ old('email', auth()->user()->email) }}</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                    <div>
                        <label for="age" class="block text-green-800 font-semibold mb-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Usia (tahun)
                        </label>
                        <input
                            type="number"
                            name="age"
                            id="age"
                            class="w-full border border-green-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent bg-green-50 text-green-900 font-medium"
                            value="{{ old('age', auth()->user()->age) }}"
                            readonly
                        />
                    </div>

                    <div>
                        <label for="weight" class="block text-green-800 font-semibold mb-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Berat Badan (kg)
                        </label>
                        <input
                            type="number"
                            name="weight"
                            id="weight"
                            class="w-full border border-green-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent bg-green-50 text-green-900 font-medium"
                            value="{{ old('weight', auth()->user()->weight) }}"
                            readonly
                        />
                    </div>

                    <div>
                        <label for="height" class="block text-green-800 font-semibold mb-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v-4m0 0l6-6m-6 6h6m6-6v12a2 2 0 01-2 2h-4" />
                            </svg>
                            Tinggi Badan (cm)
                        </label>
                        <input
                            type="number"
                            name="height"
                            id="height"
                            class="w-full border border-green-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent bg-green-50 text-green-900 font-medium"
                            value="{{ old('height', auth()->user()->height) }}"
                            readonly
                        />
                    </div>

                    <div>
                        <label for="activity_level" class="block text-green-800 font-semibold mb-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6" />
                            </svg>
                            Tingkat Aktivitas
                        </label>
                        <select
                            name="activity_level"
                            id="activity_level"
                            class="w-full border border-green-300 rounded-lg p-3 bg-green-50 text-green-900 font-medium focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent"
                            disabled
                        >
                            <option value="rendah" {{ old('activity_level', auth()->user()->activity_level) == 'rendah' ? 'selected' : '' }}>Rendah</option>
                            <option value="sedang" {{ old('activity_level', auth()->user()->activity_level) == 'sedang' ? 'selected' : '' }}>Sedang</option>
                            <option value="tinggi" {{ old('activity_level', auth()->user()->activity_level) == 'tinggi' ? 'selected' : '' }}>Tinggi</option>
                        </select>
                    </div>
                </div>

                <div class="mt-8 flex gap-4">
                    <button type="button" id="editBtn" class="flex-1 bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition-shadow shadow-md">
                        Edit Profil
                    </button>
                    <button type="submit" id="saveBtn" class="flex-1 bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-shadow shadow-md hidden">
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </form>

        {{-- <form method="POST" action="{{ route('logout') }}" class="mt-8">
            @csrf
            <button
                class="w-full border border-red-600 bg-red-600 text-white px-4 py-3 rounded-lg font-semibold text-sm hover:bg-red-700 transition-shadow shadow-md"
                onclick="event.preventDefault(); this.closest('form').submit();"
            >
                Logout
            </button>
        </form> --}}
    </div>
</div>

<script>
    const editBtn = document.getElementById('editBtn');
    const saveBtn = document.getElementById('saveBtn');
    const formFields = ['name', 'age', 'weight', 'height', 'activity_level'];

    editBtn.addEventListener('click', () => {
        formFields.forEach(id => {
            const el = document.getElementById(id);
            if (el.tagName === 'SELECT') {
                el.removeAttribute('disabled'); // aktifkan select
            } else {
                el.removeAttribute('readonly'); // aktifkan input
            }
        });
        editBtn.classList.add('hidden');
        saveBtn.classList.remove('hidden');
    });
</script>

@endsection
