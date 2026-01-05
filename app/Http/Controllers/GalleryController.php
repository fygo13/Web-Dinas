<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('galeri.index', [
            'title' => 'Galeri Foto',
            'galeri' => Gallery::latest()->get()
        ]);
    }
}
