@extends('layouts.app')

@section('content')

<div class="container py-4">

    <h3 class="fw-bold text-primary mb-3">{{ $item->judul }}</h3>

    <div class="card shadow-sm border-0 p-4">

        <p class="text-muted">
            {!! nl2br(e($item->deskripsi)) !!}
        </p>

    </div>

    <a href="/layanan" class="btn btn-outline-primary mt-4">
        ← Kembali ke Layanan
    </a>

</div>

@endsection
