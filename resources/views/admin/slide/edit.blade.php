@extends('admin.layouts.app')

@section('content')
<h4>Edit Slide</h4>

<form action="{{ route('admin.slide.update',$slide->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" value="{{ $slide->judul }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control">{{ $slide->deskripsi }}</textarea>
    </div>

    <div class="mb-3">
        <label>Gambar Lama</label><br>
        <img src="{{ asset('img/slide/'.$slide->gambar) }}" width="200">
    </div>

    <div class="mb-3">
        <label>Ganti Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>

    <button class="btn btn-primary">Update</button>
</form>
@endsection
