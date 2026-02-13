<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')
                         ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        $barang->update($request->all());

        return redirect()->route('barang.index')
                         ->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()->route('barang.index')
                         ->with('success', 'Data berhasil dihapus');
    }
}
