<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('galeri.index', [
            'galeri' => Gallery::latest()->paginate(12)
        ]);
    }

    public function show($id)
    {
        return view('galeri.detail', [
            'item' => Gallery::findOrFail($id)
        ]);
    }
}
