@extends('admin.layouts.app')

@section('content')
<h4 class="mb-3">Edit Profil Dinas</h4>

<form action="{{ route('admin.profil.update', $profile->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <div class="mb-3">
        <label class="form-label">Tipe Profil</label>
        <input type="text" class="form-control" value="{{ ucfirst($profile->tipe) }}" disabled>
    </div>

    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" name="judul" class="form-control"
               value="{{ old('judul', $profile->judul) }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Isi</label>
        <textarea name="isi" rows="6" class="form-control" required>{{ old('isi', $profile->isi) }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Gambar</label>
        <input type="file" name="gambar" class="form-control">

        @if($profile->gambar)
            <div class="mt-2">
                <img src="{{ asset('img/profil/'.$profile->gambar) }}"
                     width="200" class="img-thumbnail">
            </div>
        @endif
    </div>

    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary">
            Simpan Perubahan
        </button>
        <a href="{{ route('admin.profil.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </div>

</form>
@endsection
