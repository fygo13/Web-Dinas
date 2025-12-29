<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
     public function index()
    {
        return view('admin.galeri.index', [
            'title' => 'Galeri',
            'galeri' => Gallery::latest()->get()
        ]);
    }

    public function create()
    {
        return view('admin.galeri.create', [
            'title' => 'Tambah Galeri'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'judul'  => 'nullable|string'
        ]);

        $file = $request->file('gambar');
        $namaFile = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('img/galeri'), $namaFile);

        Gallery::create([
            'judul'  => $request->judul,
            'gambar' => $namaFile
        ]);

        return redirect()->route('admin.galeri.index')
                         ->with('success','Foto berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $galeri = Gallery::findOrFail($id);

        $path = public_path('img/galeri/'.$galeri->gambar);
        if (file_exists($path)) {
            unlink($path);
        }

        $galeri->delete();

        return back()->with('success','Foto berhasil dihapus');
    }
}
