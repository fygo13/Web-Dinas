@extends('layouts.app')

@section('content')

<!-- HEADER -->
<section class="bg-primary text-white py-5">
    <div class="container text-center">
        <h2 class="fw-bold">Galeri</h2>
        <p class="mb-0">Dokumentasi kegiatan Dinas Kabupaten Belitung</p>
    </div>
</section>

<!-- GALERI -->
<section class="py-5">
    <div class="container">

        <div class="row g-4">
            @forelse($galeri as $g)
            <div class="col-md-3 col-sm-6">
                <div class="galeri-card">

                    <img src="{{ asset('img/galeri/'.$g->gambar) }}" alt="Galeri">

                    <div class="galeri-overlay">
                        <span>{{ $g->judul ?? 'Kegiatan Dinas' }}</span>
                    </div>

                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p class="text-muted">Belum ada foto galeri</p>
            </div>
            @endforelse
        </div>

    </div>
</section>

@endsection

<style>
/* Galeri Card */
.galeri-card {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,.15);
}

.galeri-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    transition: .4s ease;
}

/* Hover Effect */
.galeri-card:hover img {
    transform: scale(1.15);
}

/* Overlay */
.galeri-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,.7), transparent);
    display: flex;
    align-items: flex-end;
    padding: 15px;
    opacity: 0;
    transition: .4s;
}

.galeri-card:hover .galeri-overlay {
    opacity: 1;
}

.galeri-overlay span {
    color: #fff;
    font-weight: 600;
    font-size: 14px;
}
</style>
