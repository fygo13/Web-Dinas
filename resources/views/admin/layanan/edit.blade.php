@extends('admin.layouts.app')

@section('content')

<h4>Edit Layanan</h4>

<form method="POST" action="{{ route('admin.layanan.update',$layanan->id) }}">
@csrf @method('PUT')

<div class="mb-3">
    <label>Nama Layanan</label>
    <input type="text" name="nama_layanan" class="form-control"
           value="{{ $layanan->nama_layanan }}" required>
</div>

<div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="deskripsi" rows="4" class="form-control" required>{{ $layanan->deskripsi }}</textarea>
</div>

<button class="btn btn-primary">Update</button>
<a href="{{ route('admin.layanan.index') }}" class="btn btn-secondary">Kembali</a>

</form>
@endsection
