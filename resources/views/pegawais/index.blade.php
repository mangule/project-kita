<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pegawai</title>
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
        <div class="card-header text-white d-flex justify-content-between align-items-center"
             style="background:#1b263b;">
            <h5 class="mb-0">Daftar Pegawai</h5>
            <a href="{{ route('pegawais.create') }}" class="btn btn-light btn-sm fw-semibold">
                + Tambah
            </a>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead style="background:#415a77; color:white;">
                        <tr class="text-center">
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Alamat</th>
                            <th>No Handphone</th>
                            <th>Email</th>
                            <th width="200">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pegawais as $pegawai)
                        <tr>
                            <td class="text-center">{{ $pegawai->id }}</td> 
                            <td class="fw-semibold">{{ $pegawai->nip }}</td>
                            <td>{{ $pegawai->nama }}</td>
                            <td>{{ $pegawai->jabatan }}</td>
                            <td>{{ $pegawai->alamat }}</td>
                            <td>{{ $pegawai->no_hp }}</td>
                            <td>{{ $pegawai->email }}</td>
                            <td class="text-center">
                                <a href="{{ route('pegawais.show', $pegawai->id) }}"
                                   class="btn btn-info btn-sm text-white">Detail</a>

                                <a href="{{ route('pegawais.edit', $pegawai->id) }}"
                                   class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('pegawais.destroy', $pegawai->id) }}"
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin mau hapus?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">
                                Tidak ada data pegawai
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

</body>
</html>
