@extends('layouts.app')

@section('content')

<div class="container py-4">

    <h2 class="fw-bold mb-4 text-primary text-center">Galeri</h2>

    <div class="row g-4">

        @forelse ($galeri as $item)
        <div class="col-md-3">
            <div class="card shadow-sm border-0 h-100">

                <a href="{{ url('/galeri/' . $item->id) }}">
                    <img src="{{ asset('storage/' . $item->gambar) }}"
                         class="card-img-top rounded"
                         style="height: 180px; object-fit: cover;">
                </a>

                <div class="card-body text-center">
                    <h6 class="fw-bold">{{ $item->judul }}</h6>
                </div>

            </div>
        </div>
        @empty
            <p class="text-muted text-center">Belum ada foto galeri.</p>
        @endforelse

    </div>

    <div class="mt-4">
        {{ $galeri->links() }}
    </div>

</div>

@endsection
