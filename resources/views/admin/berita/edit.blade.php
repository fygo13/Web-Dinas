@extends('admin.layouts.app')

@section('content')

<h4>Edit Berita</h4>

<form method="POST" enctype="multipart/form-data" action="{{ route('admin.berita.update',$berita->id) }}">
@csrf @method('PUT')

<div class="mb-3">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control" value="{{ $berita->judul }}">
</div>

<div class="mb-3">
    <label>Gambar</label><br>
    @if($berita->gambar)
        <img src="{{ asset('img/berita/'.$berita->gambar) }}" width="120" class="mb-2">
    @endif
    <input type="file" name="gambar" class="form-control">
</div>

<div class="mb-3">
    <label>Isi</label>
    <textarea name="isi" rows="6" class="form-control">{{ $berita->isi }}</textarea>
</div>

<button class="btn btn-primary">Update</button>
<a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>

</form>
@endsection
