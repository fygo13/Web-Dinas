@extends('admin.layouts.app')

@section('content')
<div class="container py-4">

    <h2 class="mb-4">Edit Foto Galeri</h2>

    <form action="/admin/galeri/{{ $galeri->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Judul Foto</label>
            <input type="text" name="judul" 
                   class="form-control" 
                   value="{{ $galeri->judul }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Ganti Foto</label>
            <input type="file" name="gambar" class="form-control">

            <small class="text-muted">Kosongkan jika tidak mengganti foto.</small>

            <div class="mt-3">
                <img src="/storage/{{ $galeri->gambar }}" height="120" class="rounded">
            </div>
        </div>

        <button class="btn btn-warning">Update</button>
        <a href="/admin/galeri" class="btn btn-secondary">Kembali</a>

    </form>

</div>
@endsection
