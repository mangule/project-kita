<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawais.index', compact('pegawais'));
    }

    public function create()
    {
        return view('pegawais.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:pegawais',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'nullable',
            'no_hp' => 'nullable',
            'email' => 'required|email|unique:pegawais',
            'jabatan' => 'required',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawais.index')
                         ->with('success', 'Data pegawai berhasil ditambahkan');
    }

    public function show(Pegawai $pegawai)
    {
        return view('pegawais.show', compact('pegawai'));
    }

    public function edit(Pegawai $pegawai)
    {
        return view('pegawais.edit', compact('pegawai'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nip' => 'required|unique:pegawais,nip,' . $pegawai->id,
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'nullable',
            'no_hp' => 'nullable',
            'email' => 'required|email|unique:pegawais,email,' . $pegawai->id,
            'jabatan' => 'required',
        ]);

        $pegawai->update($request->all());

        return redirect()->route('pegawais.index')
                         ->with('success', 'Data pegawai berhasil diupdate');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();

        return redirect()->route('pegawais.index')
                         ->with('success', 'Data pegawai berhasil dihapus');
    }
}
