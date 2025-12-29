<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('kontak.index');
    }

    public function kirim(Request $request)
    {
        // proses pesan, simpan ke database atau kirim email
        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
