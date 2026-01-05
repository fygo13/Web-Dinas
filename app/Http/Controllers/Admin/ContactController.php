<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.kontak.index', [
            'title' => 'Pesan Masuk',
            'kontak' => Contact::latest()->get()
        ]);
    }

    public function show($id)
    {
        return view('admin.kontak.show', [
            'title' => 'Detail Pesan',
            'kontak' => Contact::findOrFail($id)
        ]);
    }

    public function destroy($id)
    {
        Contact::findOrFail(id)->delete();
        return redirect()->route('admin.kontak.index')->with('success', 'Pesan berhasil dihapus.');
    }
}    