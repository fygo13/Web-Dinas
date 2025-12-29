<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        return view('layanan.index', [
            'layanans' => \App\Models\Layanan::all(),
            'title' => 'Layanan'
        ]);
    }
}
