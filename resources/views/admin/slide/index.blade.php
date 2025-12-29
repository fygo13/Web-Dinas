@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h4>Data Slide</h4>
    <a href="{{ route('admin.slide.create') }}" class="btn btn-primary">Tambah Slide</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($slides as $no => $s)
        <tr>
            <td>{{ $no+1 }}</td>
            <td>
                <img src="{{ asset('img/slide/'.$s->gambar) }}" width="120">
            </td>
            <td>{{ $s->judul }}</td>
            <td>
                <a href="{{ route('admin.slide.edit',$s->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('admin.slide.delete',$s->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus slide?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
