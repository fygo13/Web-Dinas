<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita.index', [
            'title' => 'Berita',
            'beritas' => Berita::latest()->paginate(6)
        ]);
    }

    public function show($slug)
    {
        return view('berita.show', [
            'title' => 'Detail Berita',
            'berita' => Berita::where('slug', $slug)->firstOrFail()
        ]);
    }
}
