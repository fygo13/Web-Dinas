@extends('admin.layouts.app')

@section('content')
<div class="container py-4">

    <h2 class="mb-4">Tambah Foto Galeri</h2>

    <form action="/admin/galeri" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Judul Foto</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Upload Foto</label>
            <input type="file" name="gambar" class="form-control" required>
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="/admin/galeri" class="btn btn-secondary">Kembali</a>

    </form>

</div>
@endsection
