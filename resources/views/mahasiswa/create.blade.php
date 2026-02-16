<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white w-full max-w-md rounded-xl shadow-lg p-6">

        <!-- Judul -->
        <h1 class="text-2xl font-bold mb-6 text-center">
            Tambah Mahasiswa
        </h1>

        <form action="/mahasiswa" method="POST" class="space-y-4">
            @csrf

            <!-- Nama -->
            <div>
                <label class="block text-sm font-medium mb-1">Nama</label>
                <input
                    type="text"
                    name="nama"
                    value="{{ old('nama') }}"
                    placeholder="Masukkan nama"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                >
                @error('nama')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- NIM -->
            <div>
                <label class="block text-sm font-medium mb-1">NIM</label>
                <input
                    type="text"
                    name="nim"
                    value="{{ old('nim') }}"
                    placeholder="Masukkan NIM"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                >
                @error('nim')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Jurusan -->
            <div>
                <label class="block text-sm font-medium mb-1">Jurusan</label>
                <input
                    type="text"
                    name="jurusan"
                    value="{{ old('jurusan') }}"
                    placeholder="Masukkan jurusan"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                >
                @error('jurusan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Angkatan -->
            <div>
                <label class="block text-sm font-medium mb-1">Angkatan</label>
                <input
                    type="number"
                    name="angkatan"
                    value="{{ old('angkatan') }}"
                    placeholder="Contoh: 2023"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                >
                @error('angkatan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol -->
            <div class="flex justify-end gap-2 pt-4">
                <a
                    href="/mahasiswa"
                    class="px-4 py-2 rounded-lg border text-gray-600 hover:bg-gray-100"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700"
                >
                    Simpan
                </button>
            </div>
        </form>

    </div>
</div>
