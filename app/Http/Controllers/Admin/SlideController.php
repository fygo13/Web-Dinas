<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        return view('admin.slide.index', [
            'slides' => Slide::latest()->get(),
            'title' => 'Data Slide'
        ]);
    }

    public function create()
    {
        return view('admin.slide.create', [ 'title' => 'Tambah Slide' ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $namaGambar = time() . '_' . $request->gambar->extension();
        $request->gambar->move(public_path('img/slide'), $namaGambar);

        Slide::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $namaGambar
        ]);

        return redirect()->route('admin.slide.index')->with('success', 'Slide berhasil ditambahkan.');
    }

    public function edit($id)
    {
        return view('admin.slide.edit', [
            'slide' => Slide::findOrFail($id),
            'title' => 'Edit Slide'
        ]);
    }

    public function update(Request $request, $id)
    {
        $slide = Slide::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $path = public_path('img/slide/' . $slide->gambar);
            if (file_exists($path)) {
                unlink($path);
            }

            $namaGambar = time() . '_' . $request->gambar->extension();
            $request->gambar->move(public_path('img/slide'), $namaGambar);
            $slide->gambar = $namaGambar;
        }

        $slide->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('admin.slide.index')->with('success', 'Slide berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $slide = Slide::findOrFail($id);

        $path = public_path('img/slide/' . $slide->gambar);
        if (file_exists($path)) {
            unlink($path);
        }

        $slide->delete();

        return redirect()->route('admin.slide.index')->with('success', 'Slide berhasil dihapus.');
    }
}
