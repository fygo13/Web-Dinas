@extends('admin.layouts.app')

@section('content')
<h4 class="mb-3">Profil Dinas</h4>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Tipe</th>
            <th>Judul</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($profiles as $no => $p)
        <tr>
            <td>{{ $no+1 }}</td>
            <td class="text-capitalize">{{ $p->tipe }}</td>
            <td>{{ $p->judul }}</td>
            <td>
                <a href="{{ route('admin.profil.edit',$p->id) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
