<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen p-10">

    <div class="max-w-6xl mx-auto bg-white shadow-2xl rounded-2xl p-8">

        {{-- Header --}}
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">📚 Data Siswa</h1>
                <p class="text-gray-500 text-sm">Kelola data siswa dengan mudah dan cepat</p>
            </div>

            <a href="{{ url('/siswa/create') }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-xl shadow-md transition duration-300">
                + Tambah Siswa
            </a>
        </div>

        {{-- Alert Success --}}
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg shadow">
                ✅ {{ session('success') }}
            </div>
        @endif

        {{-- Table --}}
        <div class="overflow-x-auto rounded-xl shadow-lg">
            <table class="w-full text-sm text-left">
                <thead class="bg-indigo-600 text-white">
                    <tr>
                        <th class="px-6 py-3">Nama</th>
                        <th class="px-6 py-3">NIS</th>
                        <th class="px-6 py-3">Kelas</th>
                        <th class="px-6 py-3">Jurusan</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y bg-white">
                    @forelse ($siswa as $m)
                    <tr class="hover:bg-indigo-50 transition duration-200">
                        <td class="px-6 py-4 font-medium text-gray-800">{{ $m->nama }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $m->nis }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $m->kelas }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $m->jurusan }}</td>
                        <td class="px-6 py-4 text-center space-x-2">

                            <a href="{{ url('/siswa/'.$m->id.'/edit') }}"
                               class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-1 rounded-lg shadow transition">
                                Edit
                            </a>

                            <form action="{{ url('/siswa/'.$m->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Yakin ingin menghapus data ini?')"
                                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded-lg shadow transition">
                                    Hapus
                                </button>
                            </form>

                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-8 text-gray-500">
                            🚫 Data siswa belum tersedia
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
