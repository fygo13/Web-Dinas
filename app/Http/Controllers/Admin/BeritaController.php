<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        return view('admin.berita.index', [
            'beritas' => Berita::latest()->get(),
            'title' => 'Data Berita'
        ]);
    }

    public function create()
    {
        return view('admin.berita.create', [
            'title' => 'Tambah Berita'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $nama = time().'_'.$request->gambar->extension();
            $request->gambar->move(public_path('img/berita'), $nama);
            $gambar = $nama;
        }

        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'isi' => $request->isi,
            'gambar' => $gambar
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit($id)
    {
        return view('admin.berita.edit', [
            'berita' => Berita::findOrFail($id),
            'title' => 'Edit Berita'
        ]);
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $gambar = $berita->gambar;

        if ($request->hasFile('gambar')) {
            if ($gambar && file_exists(public_path('img/berita/'.$gambar))) {
                unlink(public_path('img/berita/'.$gambar));
            }

            $nama = time().'_'.$request->gambar->extension();
            $request->gambar->move(public_path('img/berita'), $nama);
            $gambar = $nama;
        }

        $berita->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'isi' => $request->isi,
            'gambar' => $gambar
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diupdate.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->gambar && file_exists(public_path('img/berita/'.$berita->gambar))) {
            unlink(public_path('img/berita/'.$berita->gambar));
        }

        $berita->delete();

        return back()->with('success', 'Berita berhasil dihapus.');
    }
}
