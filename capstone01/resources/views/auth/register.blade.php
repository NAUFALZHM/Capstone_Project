<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <div class="mt-4">
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- gender --}}
        <div class="mt-4">
            <x-input-label for="gender" :value="__('Gender')" />
            <select name="gender" id="gender" class="block mt-1 w-full">
                <option value="" disabled selected>Pilih Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <!-- age -->
        <div class="mt-4">
            <x-input-label for="age" :value="__('age')" />
            <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" min="1" max="150" :value="old('age')" required autocomplete="age" />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>

        <!-- weight -->
        <div class="mt-4">
            <x-input-label for="weight" :value="__('weight (kg)')" />
            <x-text-input id="weight" class="block mt-1 w-full" type="number" name="weight" min="1" max="350" :value="old('weight')" required autocomplete="weight" />
            <x-input-error :messages="$errors->get('weight')" class="mt-2" />
        </div>

        <!-- height-->
        <div class="mt-4">
            <x-input-label for="height" :value="__('height (cm)')" />
            <x-text-input id="height" class="block mt-1 w-full" type="number" name="height" min="1" max="300" :value="old('height')" required autocomplete="height" />
            <x-input-error :messages="$errors->get('height')" class="mt-2" />
        </div>

        <!-- activity level -->
        <div class="mt-4">
            <x-input-label for="activity_level" :value="__('activity_level')" />
            <select name="activity_level" id="activity">
                <option value="" disabled selected>Pilih Level Aktivitas</option>
                <option value="ringan">Ringan</option>
                <option value="sedang">Sedang</option>
                <option value="tinggi">Tinggi</option>
            </select>
        <x-input-error :messages="$errors->get('activity_level')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
@if ($errors->any())
    <div class="mb-4 text-red-500">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif