<!DOCTYPE html>
<html>
<head>
    <title>Detail Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f6f9;">

<div class="container mt-5">

    <div class="card shadow border-0">
        <div class="card-header text-white"
             style="background:#0d1b2a;">
            <h5 class="mb-0">Detail Pegawai</h5>
        </div>

        <div class="card-body">

            <table class="table table-bordered">
                <tr><th width="200">ID</th><td>{{ $pegawai->id }}</td></tr>
                <tr><th>NIP</th><td>{{ $pegawai->nip }}</td></tr>
                <tr><th>Nama</th><td>{{ $pegawai->nama }}</td></tr>
                <tr><th>Jenis Kelamin</th><td>{{ $pegawai->jenis_kelamin }}</td></tr>
                <tr><th>Alamat</th><td>{{ $pegawai->alamat }}</td></tr>
                <tr><th>No HP</th><td>{{ $pegawai->no_hp }}</td></tr>
                <tr><th>Email</th><td>{{ $pegawai->email }}</td></tr>
                <tr><th>Jabatan</th><td>{{ $pegawai->jabatan }}</td></tr>
            </table>

            <a href="{{ route('pegawais.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('pegawais.edit', $pegawai->id) }}" class="btn btn-warning">Edit</a>

        </div>
    </div>

</div>

</body>
</html>
