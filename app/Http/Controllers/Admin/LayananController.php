<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        return view('admin.layanan.index', [
            'layanans' => Layanan::latest()->get(),
            'title' => 'Data Layanan'
        ]);
    }

    public function create()
    {
        return view('admin.layanan.create', [
            'title' => 'Tambah Layanan'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'deskripsi' => 'required'
        ]);

        Layanan::create($request->all());

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        return view('admin.layanan.edit', [
            'layanan' => $layanan::findOrFail($id),
            'title' => 'Edit Layanan'
        ]);
    }

    public function update(Request $request, $id)
    {
        $layanan = Layanan::findOrFail($id);

        $layanan->update($request->all());

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Layanan::destroy($id);
        return back()->with('success', 'Layanan berhasil dihapus.');
    }
}
