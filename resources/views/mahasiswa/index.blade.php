<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-700">📚 Data Mahasiswa</h1>

            <a href="/mahasiswa/create"
               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">
                + Tambah Mahasiswa
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3 text-left text-gray-600">Nama</th>
                        <th class="px-4 py-3 text-left text-gray-600">NIM</th>
                        <th class="px-4 py-3 text-left text-gray-600">Jurusan</th>
                        <th class="px-4 py-3 text-left text-gray-600">Angkatan</th>
                        <th class="px-4 py-3 text-center text-gray-600">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y">
                    @foreach ($mahasiswa as $m)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">{{ $m->nama }}</td>
                        <td class="px-4 py-3">{{ $m->nim }}</td>
                        <td class="px-4 py-3">{{ $m->jurusan }}</td>
                        <td class="px-4 py-3">{{ $m->angkatan }}</td>
                        <td class="px-4 py-3 text-center space-x-2">
                            <a href="/mahasiswa/{{ $m->id }}/edit"
                               class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded">
                                Edit
                            </a>

                            <form action="/mahasiswa/{{ $m->id }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Hapus data?')"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
