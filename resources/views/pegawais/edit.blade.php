<!DOCTYPE html>
<html>
<head>
    <title>Edit Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f6f9;">

<nav class="navbar navbar-dark" style="background:#0d1b2a;">
    <div class="container">
        <span class="navbar-brand fw-bold">SISTEM DATA PEGAWAI</span>
    </div>
</nav>

<div class="container mt-5">

    <div class="card shadow border-0">
        <div class="card-header text-white"
             style="background:#415a77;">
            <h5 class="mb-0">Edit Data Pegawai</h5>
        </div>

        <div class="card-body">

            {{-- Error Validation --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('pegawais.update', $pegawai->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold">NIP</label>
                        <input type="text"
                               name="nip"
                               class="form-control"
                               value="{{ old('nip', $pegawai->nip) }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold">Nama</label>
                        <input type="text"
                               name="nama"
                               class="form-control"
                               value="{{ old('nama', $pegawai->nama) }}"
                               required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-select" required>
                        <option value="L"
                            {{ old('jenis_kelamin', $pegawai->jenis_kelamin)=='L' ? 'selected' : '' }}>
                            Laki-laki
                        </option>
                        <option value="P"
                            {{ old('jenis_kelamin', $pegawai->jenis_kelamin)=='P' ? 'selected' : '' }}>
                            Perempuan
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold">Alamat</label>
                    <textarea name="alamat"
                              class="form-control"
                              rows="3">{{ old('alamat', $pegawai->alamat) }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold">No HP</label>
                        <input type="text"
                               name="no_hp"
                               class="form-control"
                               value="{{ old('no_hp', $pegawai->no_hp) }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold">Email</label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email', $pegawai->email) }}"
                               required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="fw-semibold">Jabatan</label>
                    <input type="text"
                           name="jabatan"
                           class="form-control"
                           value="{{ old('jabatan', $pegawai->jabatan) }}"
                           required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('pegawais.index') }}"
                       class="btn btn-secondary">
                        ← Kembali
                    </a>

                    <button type="submit"
                            class="btn btn-warning text-dark fw-semibold">
                        Update Data
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>
