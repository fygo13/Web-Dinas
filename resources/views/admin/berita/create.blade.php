@extends('admin.layouts.app')

@section('content')

<h4>Tambah Berita</h4>

<form method="POST" enctype="multipart/form-data" action="{{ route('admin.berita.store') }}">
@csrf

<div class="mb-3">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control" required>
</div>

<div class="mb-3">
    <label>Gambar</label>
    <input type="file" name="gambar" class="form-control">
</div>

<div class="mb-3">
    <label>Isi Berita</label>
    <textarea name="isi" rows="6" class="form-control" required></textarea>
</div>

<button class="btn btn-primary">Simpan</button>
<a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>

</form>
@endsection
