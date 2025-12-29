@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h4>Data Layanan</h4>
    <a href="{{ route('admin.layanan.create') }}" class="btn btn-primary">
        + Tambah Layanan
    </a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Layanan</th>
        <th>Aksi</th>
    </tr>

    @foreach($layanans as $no => $l)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $l->nama_layanan }}</td>
        <td>
            <a href="{{ route('admin.layanan.edit',$l->id) }}" class="btn btn-warning btn-sm">Edit</a>

            <form action="{{ route('admin.layanan.destroy',$l->id) }}" method="POST" class="d-inline">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
