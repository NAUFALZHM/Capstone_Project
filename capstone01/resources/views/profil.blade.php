@extends('layouts.app')
@section('title', 'Profil - GiziSmart')
@section('content')

    <!-- Konten Utama -->
    <div class="pt-24 pb-10 px-6 md:px-0">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">
            
                <form class="flex flex-col md:flex-row items-center md:items-start gap-8" method="POST" action="{{ url('/profil') }}">
                @csrf
                    <!-- Foto Profil -->
                    <div class="flex-shrink-0">
                        <img src="https://ui-avatars.com/api/?name=Muh+Yudha+S&background=3B82F6&color=fff&size=150" alt="Foto Profil" class="w-40 h-40 rounded-full shadow-md">
                    </div>

                    <!-- Detail Profil -->
                    <div class="w-full">
                        <div>
                            <label class="font-semibold">Nama:</label>
                            <input type="text" name="name" class="border border-gray-300 rounded-md p-2 mt-1" value="{{ old('name', auth()->user()->name) }}" />
                        </div>
                        {{-- <h2 class="text-2xl font-bold mb-2">Muh Yudha Setiawan</h2> --}}
                        <p class="text-sm text-gray-500 mb-4">{{ old('email', auth()->user()->email) }}</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="font-semibold">Usia (tahun):</label><br>
                                <input type="number" name="age" class="border border-gray-300 rounded-md p-2 mt-1" value="{{ old('age', auth()->user()->age) }}"  />
                            </div>
                            <div>
                                <label class="font-semibold">Berat Badan (kg):</label><br>
                                <input type="number" name="weight" class="border border-gray-300 rounded-md p-2 mt-1" value="{{ old('weight', auth()->user()->weight) }}" />
                            </div>
                            <div>
                                <label class="font-semibold">Tinggi Badan (cm):</label><br>
                                <input type="number" name="height" class="border border-gray-300 rounded-md p-2 mt-1" value="{{ old('height', auth()->user()->height) }}" />
                            </div>
                            
                            <div>
                                <label class="font-semibold">Tingkat Aktivitas:</label><br>
                                <select name="activity_level" style="width: 12.43rem" class="border border-gray-300 rounded-md p-2 mt-1">
                                    {{-- <option value="rendah" {{ old('activity_level', auth()->user()->activity_level) == 'rendah' ? 'selected' : '' }}>Rendah</option>
                                    <option value="sedang" {{ old('activity_level', auth()->user()->activity_level) == 'sedang' ? 'selected' : '' }}>Sedang</option>
                                    <option value="tinggi" {{ old('activity_level', auth()->user()->activity_level) == 'tinggi' ? 'selected' : '' }}>Tinggi</option> --}}
                                    <option value="rendah" {{ old('activity_level') == 'rendah' ? 'selected' : '' }}>Rendah</option>
                                    <option value="sedang" {{ old('activity_level') == 'sedang' ? 'selected' : '' }}>Sedang</option>
                                    <option value="tinggi" {{ old('activity_level') == 'tinggi' ? 'selected' : '' }}>Tinggi</option>

                                </select>
                                
                            </div>
                        </div>
                    </div>
                </form>
              <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button class="border m-3 p-1" :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                

           
        </div>
    </div>

@endsection
