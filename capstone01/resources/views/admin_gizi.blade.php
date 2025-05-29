<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - GiziSmart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    <!-- Konten Admin -->
    <main class="pt-12 px-4 flex flex-col items-center flex-grow space-y-8">

        <!-- Dashboard Section -->
        <section id="dashboard" class="w-full max-w-6xl bg-white p-6 rounded-lg shadow-lg text-center">
            <h1 class="text-4xl font-bold text-blue-700">Profil Admin</h1>
            <p class="text-gray-600 mt-2">Selamat datang di halaman profil Anda.</p>
        </section>

        <!-- Edit Tampilan Section -->
        <section id="edit" class="bg-white p-4 rounded-lg shadow-lg w-full max-w-6xl">
            <h2 class="text-xl font-semibold mb-4">Data Produk/User</h2>
            <table class="min-w-full bg-white border border-black">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4">Nama</th>
                        <th class="py-2 px-4">Email</th>
                        <th class="py-2 px-4">Role</th>
                        <th class="py-2 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="border-b text-center">
                        <td class="py-2 px-4">{{ $user->name }}</td>
                        <td class="py-2 px-4">{{ $user->email }}</td>
                        <td class="py-2 px-4">{{ $user->role }}</td>
                        <td class="py-2 px-4">
                            <div class="flex justify-center">
                                <form action="{{ url('/user', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <!-- Sinkronisasi Section + Tombol Upload & Edit -->
        <section class="bg-white p-4 rounded-lg shadow-lg w-full max-w-6xl mt-6">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="text-xl font-semibold">Kelola Data Gizi</h2>
                    <p class="text-gray-600">Klik tombol di bawah untuk mengunggah atau mengedit data makanan.</p>
                </div>

                <!-- Tombol Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                        Logout
                    </button>
                </form>
            </div>

            <div class="flex gap-4">
                <a href="{{ route('admin.sync.usda') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Upload Data
                </a>
                <a href="{{ url('/admin/food/edit') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                    Edit Data
                </a>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-white border-t py-4 text-center text-sm text-gray-500 mt-auto">
        &copy; 2025 GiziSmart. Semua Hak Cipta Dilindungi.
    </footer>

</body>
</html>
