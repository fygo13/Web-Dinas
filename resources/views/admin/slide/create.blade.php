@extends('admin.layouts.app')

@section('content')
<h4>Tambah Slide</h4>

<form action="{{ route('admin.slide.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control">
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>

    <button class="btn btn-primary">Simpan</button>
</form>
@endsection
