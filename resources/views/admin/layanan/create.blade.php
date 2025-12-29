@extends('admin.layouts.app')

@section('content')

<h4>Tambah Layanan</h4>

<form method="POST" action="{{ route('admin.layanan.store') }}">
@csrf

<div class="mb-3">
    <label>Nama Layanan</label>
    <input type="text" name="nama_layanan" class="form-control" required>
</div>

<div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="deskripsi" rows="4" class="form-control" required></textarea>
</div>

<button class="btn btn-primary">Simpan</button>
<a href="{{ route('admin.layanan.index') }}" class="btn btn-secondary">Kembali</a>

</form>
@endsection
