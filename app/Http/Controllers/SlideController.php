<?php

namespace App\Http\Controllers;

use App\Mpdels\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::latest()->get();
        return view('admin.slide.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.slide.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'nullable|string',
            'deskripsi' => 'nullable',
            'gambar' => 'required|image|max:2048'
        ]);

        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->store('slides', 'public');

        Slide::create($data);
        return redirect()->route('/admin/slide')->with('success', 'Slide berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        slide::find($id)->delete();
        return back()->with('success', 'Slide berhasil dihapus!');
    }
}
