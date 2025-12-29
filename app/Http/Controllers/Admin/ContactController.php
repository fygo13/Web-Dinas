<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // =======================
    // TAMPILKAN DATA KONTAK
    // =======================
    public function index()
    {
        $kontak = Kontak::latest()->get();
        return view('admin.kontak.index', compact('kontak'));
    }

    // =======================
    // DETAIL PESAN
    // =======================
    public function show($id)
    {
        $kontak = Kontak::findOrFail($id);
        return view('admin.kontak.show', compact('kontak'));
    }

    // =======================
    // HAPUS PESAN
    // =======================
    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();

        return redirect()->route('admin.kontak.index')
                         ->with('success', 'Pesan kontak berhasil dihapus');
    }
}
