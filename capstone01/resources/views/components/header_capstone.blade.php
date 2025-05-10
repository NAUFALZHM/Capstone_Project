
<nav class="bg-blue-600 text-white shadow-md fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
        <h1 class="text-xl font-bold">GiziSmart</h1>

        <!-- Hamburger Menu -->
        <button id="menu-toggle" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <!-- Navigation Links -->
        <div id="menu" class="hidden md:flex flex-col md:flex-row md:items-center space-y-2 md:space-y-0 md:space-x-4 mt-4 md:mt-0">
            <a href="{{ url('/') }}" class="hover:underline hover:text-gray-300 transition">Dashboard</a>
            <a href="{{ url('/informasi-gizi') }}" class="hover:underline hover:text-gray-300 transition">Informasi Gizi</a>
            <a href="{{ url('/hitung-gizi') }}" class="hover:underline hover:text-gray-300 transition">Hitung Gizi</a>
            <a href="{{ url('/riwayat') }}" class="hover:underline hover:text-gray-300 transition">Riwayat</a>
            <a href="{{ url('/profil') }}" class="hover:underline hover:text-gray-300 transition">Profil</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="hover:underline hover:text-gray-300 transition">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('menu');
        toggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    });
</script>
