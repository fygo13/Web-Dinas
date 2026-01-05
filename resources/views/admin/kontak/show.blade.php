@extends('admin.layouts.app')

@section('content')

<a href="{{ route('admin.kontak.index') }}" class="btn btn-secondary mb-3">
    ← Kembali
</a>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <h5 class="fw-bold mb-3">Detail Pesan</h5>

        <table class="table table-borderless">
            <tr>
                <th width="20%">Nama</th>
                <td>{{ $contact->nama }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $contact->email }}</td>
            </tr>
            <tr>
                <th>Pesan</th>
                <td>{{ $contact->pesan }}</td>
            </tr>
            <tr>
                <th>Dikirim</th>
                <td>{{ $contact->created_at->format('d M Y H:i') }}</td>
            </tr>
        </table>

    </div>
</div>

@endsection
