<!-- resources/views/layouts/navbar.blade.php -->
<nav class="bg-blue-600 text-white shadow-md fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
        <h1 class="text-xl font-bold">GiziSmart</h1>
        <div class="space-x-4">
            <a href="{{ url('/') }}" class="hover:underline">Home</a>
            <a href="{{ url('/informasi') }}" class="hover:underline">Informasi Gizi</a>
            <a href="{{ url('/gizi') }}" class="hover:underline">Hitung Gizi</a>
            <a href="{{ url('/riwayat') }}" class="hover:underline">Riwayat</a>
            <a href="{{ url('/profil') }}" class="hover:underline">Profil</a>
        </div>
    </div>
</nav>