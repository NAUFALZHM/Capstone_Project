<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Upload Data Makanan - GiziSmart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center py-12 px-4">

    <div class="w-full max-w-3xl bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-3xl font-semibold text-blue-700 mb-6 text-center">Upload Data Makanan</h1>

        <!-- Form data makanan -->
        <form action="{{url ('/tambahInfoGizi')}}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-gray-700 font-medium mb-2">Nama Makanan</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Nasi Goreng"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required
                />
            </div>

            <div>
                <label for="description" class="block text-gray-700 font-medium mb-2">Informasi Makanan</label>
                <textarea
                    id="description"
                    name="description"
                    rows="3"
                    placeholder="Deskripsi singkat tentang makanan ini"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 resize-none"
                    required
                ></textarea>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label for="calories" class="block text-gray-700 font-medium mb-2">Kalori (kcal)</label>
                    <input
                        type="number"
                        id="calories"
                        name="calories"
                        placeholder="350"
                        min="0"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required
                    />
                </div>

                <div>
                    <label for="protein" class="block text-gray-700 font-medium mb-2">Protein (g)</label>
                    <input
                        type="number"
                        id="protein"
                        name="protein"
                        placeholder="10"
                        min="0"
                        step="0.1"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required
                    />
                </div>

                <div>
                    <label for="carbs" class="block text-gray-700 font-medium mb-2">Karbohidrat (g)</label>
                    <input
                        type="number"
                        id="carbs"
                        name="carbs"
                        placeholder="45"
                        min="0"
                        step="0.1"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required
                    />
                </div>

                <div>
                    <label for="fat" class="block text-gray-700 font-medium mb-2">Lemak (g)</label>
                    <input
                        type="number"
                        id="fat"
                        name="fat"
                        placeholder="15"
                        min="0"
                        step="0.1"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required
                    />
                </div>
            </div>

            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition-colors"
            >
                Submit Data
            </button>
        </form>
    </div>

</body>
</html>
