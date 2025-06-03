<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Data Makanan - GiziSmart</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center px-4 py-12">

  <div class="w-full max-w-3xl bg-white rounded-xl shadow-lg p-8">
    <h1 class="text-3xl font-semibold text-blue-700 mb-6 text-center">Edit Data Makanan</h1>

    <form method="POST" action="{{ url('/editInfoGizi/' . $makanan->id) }}" class="space-y-6">
      @csrf
      @method('PUT')
      <div>
        <label class="block text-gray-700 font-medium mb-2">Nama Makanan</label>
        <input type="text" name="name" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Contoh: Nasi Goreng" value="{{ old('name',$makanan->name) }}"/>
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-2">Informasi Makanan</label>
        <textarea rows="3" name="description" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 resize-none" placeholder="Contoh: Makanan khas Indonesia dengan bumbu dan nasi..."> {{ old('description',$makanan->description) }} </textarea>
      </div>

      <div class="grid grid-cols-2 gap-6">
        <div>
          <label class="block text-gray-700 font-medium mb-2">Kalori (kcal)</label>
          <input type="number" name="calories"  class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Contoh: 300" value="{{ old('calories',$makanan->calories) }}"/>
        </div>

        <div>
          <label class="block text-gray-700 font-medium mb-2">Protein (g)</label>
          <input type="number" name="protein" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Contoh: 12" value="{{ old('protein',$makanan->protein) }}"/>
        </div>

        <div>
          <label class="block text-gray-700 font-medium mb-2">Karbohidrat (g)</label>
          <input type="number" name="carbs" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Contoh: 45" value="{{ old('carbs',$makanan->carbs) }}" />
        </div>

        <div>
          <label class="block text-gray-700 font-medium mb-2">Lemak (g)</label>
          <input type="number" name="fat" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Contoh: 10" value="{{ old('fat',$makanan->fat) }}" />
        </div>
      </div>

      <div class="flex justify-between items-center pt-4">
        <a href="{{url('/')}}" class="text-gray-500 hover:underline">← Kembali</a>
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
          Simpan Perubahan
        </button>
      </div>
    </form>
  </div>

</body>
</html>
