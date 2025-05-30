@extends('layouts.app')
@section('title', 'Profil - GiziSmart')
@section('content')

<div class="min-h-screen w-full flex justify-center items-start bg-gray-50 py-10 px-6">
    <div class="w-full max-w-4xl bg-white rounded-lg shadow-lg p-8">

        <form id="profilForm" class="flex flex-col md:flex-row items-start gap-8" method="POST" action="{{ url('/profil') }}">
            @csrf
            @method('PATCH')

            <div class="w-full">
                <div>
                    <label class="font-semibold">Nama:</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="border border-gray-300 rounded-md p-2 mt-1 w-full"
                        value="{{ old('name', auth()->user()->name) }}"
                        disabled
                    />
                </div>
                <p class="text-sm text-gray-500 mb-4">{{ old('email', auth()->user()->email) }}</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="font-semibold">Usia (tahun):</label><br>
                        <input
                            type="number"
                            name="age"
                            id="age"
                            class="border border-gray-300 rounded-md p-2 mt-1 w-full"
                            value="{{ old('age', auth()->user()->age) }}"
                            disabled
                        />
                    </div>
                    <div>
                        <label class="font-semibold">Berat Badan (kg):</label><br>
                        <input
                            type="number"
                            name="weight"
                            id="weight"
                            class="border border-gray-300 rounded-md p-2 mt-1 w-full"
                            value="{{ old('weight', auth()->user()->weight) }}"
                            disabled
                        />
                    </div>
                    <div>
                        <label class="font-semibold">Tinggi Badan (cm):</label><br>
                        <input
                            type="number"
                            name="height"
                            id="height"
                            class="border border-gray-300 rounded-md p-2 mt-1 w-full"
                            value="{{ old('height', auth()->user()->height) }}"
                            disabled
                        />
                    </div>
                    <div>
                        <label class="font-semibold">Tingkat Aktivitas:</label><br>
                        <select
                            name="activity_level"
                            id="activity_level"
                            class="border border-gray-300 rounded-md p-2 mt-1 w-full"
                            disabled
                        >
                            <option value="rendah" {{ old('activity_level', auth()->user()->activity_level) == 'rendah' ? 'selected' : '' }}>Rendah</option>
                            <option value="sedang" {{ old('activity_level', auth()->user()->activity_level) == 'sedang' ? 'selected' : '' }}>Sedang</option>
                            <option value="tinggi" {{ old('activity_level', auth()->user()->activity_level) == 'tinggi' ? 'selected' : '' }}>Tinggi</option>
                        </select>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="button" id="editBtn" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                        Edit Profil
                    </button>
                    <button type="submit" id="saveBtn" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition hidden">
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="mt-6">
            @csrf
            <button
                class="border border-red-600 bg-red-600 text-white px-4 py-2 rounded-md text-sm hover:bg-red-700 transition"
                onclick="event.preventDefault(); this.closest('form').submit();"
            >
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</div>

<script>
    const editBtn = document.getElementById('editBtn');
    const saveBtn = document.getElementById('saveBtn');
    const formFields = ['name', 'age', 'weight', 'height', 'activity_level'];

    editBtn.addEventListener('click', () => {
        formFields.forEach(id => {
            document.getElementById(id).disabled = false;
        });
        editBtn.classList.add('hidden');
        saveBtn.classList.remove('hidden');
    });
</script>

@endsection
