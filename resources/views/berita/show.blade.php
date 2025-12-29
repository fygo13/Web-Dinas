@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-md-9">

            <h2 class="fw-bold text-primary mb-2">
                {{ $berita->judul }}
            </h2>

            <p class="text-muted mb-3">
                <i class="bi bi-calendar"></i>
                {{ $berita->created_at->format('d M Y') }}
            </p>

            <img src="{{ asset('img/berita/'.$berita->gambar) }}"
                 class="img-fluid rounded shadow-sm mb-4"
                 style="width: 100%; max-height: 420px; object-fit: cover;">

            <div class="content-berita">
                {!! nl2br(e($berita->isi)) !!}
            </div>

            <a href="{{ route('berita.index') }}"
               class="btn btn-secondary mt-4">
               ← Kembali ke Berita
            </a>

        </div>
    </div>

</div>

@endsection

<style>
    .content-berita {
        line-height: 1.8;
        font-size: 16px;
    }
</style>