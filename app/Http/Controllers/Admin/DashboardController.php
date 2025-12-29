<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use App\Models\Profile;
use App\Models\Berita;
use App\Models\Gallery;
use App\Models\Layanan;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalSlide' => Slide::count(),
            'totalProfil' => Profile::count(),
            'totalBerita' => Berita::count(),
            'totalLayanan' => Layanan::count(),
            'totalGaleri' => Gallery::count(),
            'totalKontak' => Contact::count(),
            'title' => 'Dashboard Admin'
        ]);
    }
}
