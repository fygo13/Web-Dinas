<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profil.index', [
            'profiles' => Profile::orderBy('tipe')->get(),
            'title' => 'Profil Dinas'
        ]);
    }

    public function edit($id)
    {
        return view('admin.profil.edit', [
            'profile' => Profile::findOrFail($id),
            'title' => 'Edit Profil Dinas'
        ]);
    }

    public function update(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($profile->gambar && file_exists(public_path('img/profil/' . $profile->gambar))) {
                unlink(public_path('img/profil/' . $profile->gambar));
            }

            $namaGambar = time() . '_' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('img/profil'), $namaGambar);
            $profile->gambar = $namaGambar;
        }

        $profile->update([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);

        return redirect()->route('admin.profil.index')->with('success', 'Profil berhasil diperbarui.');
    }
}
