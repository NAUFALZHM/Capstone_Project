<nav class="bg-green-100/90 shadow-md fixed top-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo dan Brand -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('bcg.png') }}" alt="Logo" class="h-9 w-9 rounded-full shadow">
                <span class="text-green-700 font-extrabold text-2xl tracking-tight select-none cursor-default">
                    GiziSmart
                </span>
            </div>

            <!-- Menu Bar (hidden on small screens) -->
            <div class="hidden md:flex items-center space-x-8 font-medium text-gray-700">
                <a href="{{ url('/') }}" class="relative group hover:text-green-700 transition">
                    Beranda
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-green-700 transition-all group-hover:w-full"></span>
                </a>
                <a href="{{ url('/informasi') }}" class="relative group hover:text-green-700 transition">
                    Informasi Gizi
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-green-700 transition-all group-hover:w-full"></span>
                </a>
                <a href="{{ url('/kalkulator') }}" class="relative group hover:text-green-700 transition">
                    Kalkulator Gizi
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-green-700 transition-all group-hover:w-full"></span>
                </a>
                <a href="{{ url('/gizi') }}" class="relative group hover:text-green-700 transition">
                    Hitung Gizi
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-green-700 transition-all group-hover:w-full"></span>
                </a>
                <a href="{{ url('/riwayat') }}" class="relative group hover:text-green-700 transition">
                    Riwayat
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-green-700 transition-all group-hover:w-full"></span>
                </a>
            </div>

            <!-- Auth Section (tanpa foto profile) -->
            <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                @auth
                    <button
                        class="flex items-center space-x-1 text-sm text-gray-700 hover:text-green-700 focus:outline-none">
                        <span>{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4 text-gray-500 transition" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown -->
                    <div x-show="open" x-transition
                        class="absolute right-0 mt-2 w-40 bg-white rounded-md shadow-lg z-40"
                        @mouseenter="open = true" @mouseleave="open = false">
                        <div class="py-1">
                            <a href="{{ url('/profil') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}"
                        class="text-green-700 font-medium hover:underline text-sm mr-3">Login</a>
                    <a href="{{ route('register') }}"
                        class="bg-green-500 hover:bg-green-600 text-white px-4 py-1.5 rounded-md text-sm font-semibold shadow-sm">Daftar</a>
                @endauth
            </div>


        </div>
    </div>
</nav>

<!-- Spacer supaya konten tidak tertutup navbar -->
<div class="h-16"></div>
