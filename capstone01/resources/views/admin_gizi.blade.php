<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - GiziSmart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white shadow-md fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <h1 class="text-xl font-bold">Admin - GiziSmart</h1>
            <div class="space-x-4">
                <a href="#" class="hover:underline">Dashboard</a>
                <a href="#riwayat" class="hover:underline">Riwayat</a>
                <a href="#hitung" class="hover:underline">Hitung Gizi</a>
                <a href="#user" class="hover:underline">User</a>
                <a href="#edit" class="hover:underline">Edit Tampilan</a>
                <a href="{{ url('/profil') }}" class="hover:underline">Profil</a>

            </div>
        </div>
    </nav>

    <!-- Konten Admin -->
    <main class="pt-24 px-4 flex flex-col items-center flex-grow">
        <h1 class="text-4xl font-bold text-blue-700 mb-6 text-center">Admin Dashboard</h1>

        <!-- Grid untuk 4 Sections -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 w-full max-w-6xl">

            <!-- Riwayat Section -->
            <div class="bg-white p-4 rounded-lg shadow-lg w-full" id="riwayat">
                <h2 class="text-xl font-semibold mb-4">Tambah Informasi Gizi</h2>
                <table class="min-w-full bg-white">
                    <a class="bg-blue-500 text-white px-4 py-2 rounded-lg" href="{{ url('/admin/tambahInfoGizi') }}">
                        Tambahkan Infromasi gizi
                    </a>
                </table>
            </div>

            <!-- Hitung Gizi Section -->
            <div class="bg-white p-4 rounded-lg shadow-lg w-full" id="hitung">
                <h2 class="text-xl font-semibold mb-4">Riwayat Hitung Gizi</h2>
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="w-full bg-gray-200 text-left">
                            <th class="py-2 px-4">ID</th>
                            <th class="py-2 px-4">User</th>
                            <th class="py-2 px-4">Kalori</th>
                            <th class="py-2 px-4">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2 px-4">1</td>
                            <td class="py-2 px-4">User123</td>
                            <td class="py-2 px-4">2000 Kcal</td>
                            <td class="py-2 px-4">2025-05-19</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- User Section -->
            <div class="bg-white p-4 rounded-lg shadow-lg w-full" id="user">
                <h2 class="text-xl font-semibold mb-4">User yang Login</h2>
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="w-full bg-gray-200 text-left">
                            <th class="py-2 px-4">ID</th>
                            <th class="py-2 px-4">Username</th>
                            <th class="py-2 px-4">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2 px-4">1</td>
                            <td class="py-2 px-4">User123</td>
                            <td class="py-2 px-4">Online</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Edit Tampilan Section -->
            <div class="bg-white p-4 rounded-lg shadow-lg w-full" id="edit">
                <table class=" border border-black w-full">
                @foreach ($products as $user )
                <tr>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>{{ $user->name }}</td>   
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <form action="{{ url('/user', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg">Hapus</button>
                        </form>
                </tr>
                @endforeach
            
                </table>
            </div>

            {{-- Tombol sikronisasi --}}
            <div class="bg-white p-4 rounded-lg shadow-lg w-full mt-4">
                <h2 class="text-xl font-semibold mb-4">Sinkronisasi Data dari USDA</h2>
                <p class="text-gray-600 mb-4">Klik tombol di bawah untuk mengunggah data gizi dari USDA ke Algolia.</p>
                <a href="{{ route('admin.sync.usda') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Sinkronisasi Data</a>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t py-4 text-center text-sm text-gray-500 mt-auto">
        &copy; 2025 GiziSmart. Semua Hak Cipta Dilindungi.
    </footer>

</body>
</html>