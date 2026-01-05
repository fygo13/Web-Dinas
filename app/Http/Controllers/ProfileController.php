<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function sejarah()
    {
        return view('profile.sejarah', [
            'profile' => Profile::where('tipe', 'sejarah')->firstOrFail(),
            'title' => 'Sejarah Dinas'
        ]);
    }

    public function struktur()
    {
        return view('profile.struktur', [
            'profile' => Profile::where('tipe', 'struktur')->firstOrFail(),
            'title' => 'Struktur Organisasi'
        ]);
    }

    public function visiMisi()
    {
        return view('profile.visi-misi', [
            'profile' => Profile::where('tipe', 'visi-misi')->firstOrFail(),
            'title' => 'Visi & Misi'
        ]);
    }

}
