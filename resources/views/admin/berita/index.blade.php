@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h4>Data Berita</h4>
    <a href="{{ route('admin.berita.create') }}" class="btn btn-primary">+ Tambah</a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Gambar</th>
    <th>Aksi</th>
</tr>

@foreach($beritas as $no => $b)
<tr>
    <td>{{ $no+1 }}</td>
    <td>{{ $b->judul }}</td>
    <td>
        @if($b->gambar)
        <img src="{{ asset('img/berita/'.$b->gambar) }}" width="100">
        @endif
    </td>
    <td>
        <a href="{{ route('admin.berita.edit',$b->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('admin.berita.destroy',$b->id) }}" method="POST" class="d-inline">
            @csrf @method('DELETE')
            <button onclick="return confirm('Hapus?')" class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </td>
</tr>
@endforeach
</table>

@endsection
