<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Berita;
use App\Models\Gallery;
use App\Models\Layanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
          'slides' => Slide::all(),
          'berita' => Berita::latest()->take(3)->get(),
          'galeri' => Gallery::latest()->take(8)->get(),
          'layanan' => Layanan::latest()->take(3)->get(),
        ]);
    }
}
