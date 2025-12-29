@extends('admin.layouts.app')

@section('content')
<div class="container py-4">

    <h2 class="mb-4">Detail Pesan Pengaduan</h2>

    <div class="card shadow-sm">
        <div class="card-body">

            <p><strong>Nama:</strong> {{ $kontak->nama }}</p>
            <p><strong>Email:</strong> {{ $kontak->email }}</p>
            <p><strong>Pesan:</strong></p>
            <div class="p-3 bg-light border rounded">
                {{ $kontak->pesan }}
            </div>

            <p class="mt-3"><strong>Tanggal:</strong> {{ $kontak->created_at->format('d M Y - H:i') }}</p>

            <a href="/admin/kontak" class="btn btn-secondary mt-3">Kembali</a>

        </div>
    </div>

</div>
@endsection
