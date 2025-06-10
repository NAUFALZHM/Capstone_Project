@unless(auth()->check() && auth()->user()->role == 'admin')
<nav class="bg-green-100/90 shadow-md fixed top-0 w-full z-50" x-data="{ mobileMenuOpen: false }">
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
                <a href="{{ url('/') }}" class="hover:text-green-700">Beranda</a>
                <a href="{{ url('/informasi') }}" class="hover:text-green-700">Informasi Gizi</a>
                <a href="{{ url('/kalkulatorGizi') }}" class="hover:text-green-700">Kalkulator Gizi</a>
                <a href="{{ url('/gizi') }}" class="hover:text-green-700">Hitung Gizi</a>
                <a href="{{ url('/riwayat') }}" class="hover:text-green-700">Riwayat</a>
            </div>

            <!-- Auth Section Desktop (hidden on mobile) -->
            <div class="hidden md:block relative" x-data="{ open: false }">
                @auth
                    <button @click="open = !open" class="flex items-center text-gray-700 hover:text-green-700">
                        <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
                        <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1">
                        <a href="{{ url('/profil') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-50">Profil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('login') }}" class="text-green-700 hover:bg-green-50 px-3 py-2 rounded-md">Login</a>
                        <a href="{{ route('register') }}" class="text-white bg-green-500 hover:bg-green-600 px-3 py-2 rounded-md">Daftar</a>
                    </div>
                @endauth
            </div>

            <!-- Hamburger Menu (mobile only) -->
            <div class="md:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        class="text-gray-700 hover:text-green-700 focus:outline-none">
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="md:hidden bg-white shadow-lg absolute w-full">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ url('/') }}" @click="mobileMenuOpen = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-700 hover:bg-green-50">Beranda</a>
            <a href="{{ url('/informasi') }}" @click="mobileMenuOpen = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-700 hover:bg-green-50">Informasi Gizi</a>
            <a href="{{ url('/kalkulatorGizi') }}" @click="mobileMenuOpen = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-700 hover:bg-green-50">Kalkulator Gizi</a>
            <a href="{{ url('/gizi') }}" @click="mobileMenuOpen = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-700 hover:bg-green-50">Hitung Gizi</a>
            <a href="{{ url('/riwayat') }}" @click="mobileMenuOpen = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-700 hover:bg-green-50">Riwayat</a>
            
            <!-- Auth Section Mobile -->
            <div class="pt-4 pb-2 border-t border-gray-200">
                @auth
                    <div class="flex items-center px-4">
                        <div class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</div>
                    </div>
                    <div class="mt-3 space-y-1">
                        <a href="{{ url('/profil') }}" @click="mobileMenuOpen = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-700 hover:bg-green-50">Profil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-red-600 hover:bg-red-50">
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <div class="mt-3 space-y-1">
                        <a href="{{ route('login') }}" @click="mobileMenuOpen = false" class="block px-3 py-2 rounded-md text-base font-medium text-green-700 hover:bg-green-50">Login</a>
                        <a href="{{ route('register') }}" @click="mobileMenuOpen = false" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-green-500 hover:bg-green-600">Daftar</a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>

<!-- Spacer supaya konten tidak tertutup navbar -->
<div class="h-16"></div>
@endunless