@extends('layouts.app')

@section('content')

<div class="container py-4">

    <h3 class="fw-bold mb-3 text-primary">{{ $item->judul }}</h3>

    <img src="{{ asset('storage/' . $item->gambar) }}"
         class="img-fluid rounded shadow-sm"
         style="max-height: 600px; object-fit: cover;">

    <p class="mt-3 text-muted">{{ $item->deskripsi }}</p>

    <a href="/galeri" class="btn btn-outline-primary mt-3">
        ← Kembali ke Galeri
    </a>

</div>

@endsection
