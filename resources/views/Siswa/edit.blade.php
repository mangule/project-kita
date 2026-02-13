<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-yellow-50 to-orange-100 min-h-screen p-10">

<div class="max-w-3xl mx-auto bg-white shadow-2xl rounded-2xl p-8">

    <h1 class="text-3xl font-bold text-gray-800 mb-6">✏ Edit Data Siswa</h1>

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

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-gray-700">Nama</label>
            <input type="text" name="nama" value="{{ old('nama', $siswa->nama) }}"
                   class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-orange-400">
        </div>

        <div>
            <label class="block text-gray-700">NIS</label>
            <input type="text" name="nis" value="{{ old('nis', $siswa->nis) }}"
                   class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-orange-400">
        </div>

        <div>
            <label class="block text-gray-700">Kelas</label>
            <input type="text" name="kelas" value="{{ old('kelas', $siswa->kelas) }}"
                   class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-orange-400">
        </div>

        <div>
            <label class="block text-gray-700">Jurusan</label>
            <input type="text" name="jurusan" value="{{ old('jurusan', $siswa->jurusan) }}"
                   class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-orange-400">
        </div>

        <div class="flex justify-between mt-6">
            <a href="{{ route('siswa.index') }}"
               class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-lg">
                Kembali
            </a>

            <button type="submit"
                    class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-lg shadow">
                Update
            </button>
        </div>

    </form>

</div>

</body>
</html>
