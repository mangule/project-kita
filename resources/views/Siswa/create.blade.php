<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen p-10">

<div class="max-w-3xl mx-auto bg-white shadow-2xl rounded-2xl p-8">

    <h1 class="text-3xl font-bold text-gray-800 mb-6">➕ Tambah Siswa</h1>

    {{-- Error Validation --}}
    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/siswa') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-gray-700">Nama</label>
            <input type="text" name="nama" value="{{ old('nama') }}"
                   class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400">
        </div>

        <div>
            <label class="block text-gray-700">NIS</label>
            <input type="text" name="nis" value="{{ old('nis') }}"
                   class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400">
        </div>

        <div>
            <label class="block text-gray-700">Kelas</label>
            <input type="text" name="kelas" value="{{ old('kelas') }}"
                   class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400">
        </div>

        <div>
            <label class="block text-gray-700">Jurusan</label>
            <input type="text" name="jurusan" value="{{ old('jurusan') }}"
                   class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400">
        </div>

        <div class="flex justify-between mt-6">
            <a href="{{ url('/siswa') }}"
               class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-lg">
                Kembali
            </a>

            <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-lg shadow">
                Simpan
            </button>
        </div>
    </form>

</div>

</body>
</html>
