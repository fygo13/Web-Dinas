@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h3 class="fw-bold text-primary mb-4 text-center">Berita Terbaru</h3>

    <div class="row g-4">

        @foreach($beritas as $b)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">

                <img src="{{ asset('img/berita/'.$b->gambar) }}"
                     class="card-img-top"
                     style="height: 200px; object-fit: cover;">

                <div class="card-body">
                    <h5 class="fw-bold">{{ $b->judul }}</h5>
                    <small class="text-muted">
                        <i class="bi bi-calendar"></i>
                        {{ $b->created_at->format('d M Y') }}
                    </small>

                    <p class="mt-2 text-muted">
                        {{ Str::limit(strip_tags($b->isi), 100) }}
                    </p>

                    <a href="{{ route('berita.show', $b->slug) }}"
                       class="btn btn-outline-primary btn-sm">
                       Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <div class="mt-4 d-flex justify-content-center">
        {{ $beritas->links() }}
    </div>

</div>

@endsection
