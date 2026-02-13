<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f6f9;">

<div class="container mt-5">

    <div class="card shadow border-0">
        <div class="card-header text-white"
             style="background:#1b263b;">
            <h5 class="mb-0">Tambah Pegawai</h5>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('pegawais.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold">NIP</label>
                        <input type="text" name="nip" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-select" required>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold">Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold">No HP</label>
                        <input type="text" name="no_hp" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" required>
                </div>

                <button class="btn btn-success">Simpan</button>
                <a href="{{ route('pegawais.index') }}" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>

</body>
</html>
