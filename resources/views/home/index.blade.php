@extends('layouts.app')

@section('content')

<!-- SLIDER -->
<div id="carouselHome" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        @foreach($slides as $key => $slide)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <img src="{{ asset('storage/Kominfo1.jpg' . $slide->gambar) }}" class="d-block w-100" alt="{{ $slide->judul }}">

            <div class="carousel-caption slider-caption">
                <div class="container">
                    <h2 class="fw-bold mb-2">{{ $slide->judul }}</h2>
                    <p class="mb-0">{{ $slide->deskripsi }}</p>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<section class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold text-primary">Selamat Datang</h2>
        <h5 class="text-secondary mb-3">Website Resmi Dinas Komunikasi dan Informatika Kabupaten Belitung</h5>
        <p class="text-muted w-75 mx-auto">
            Website ini merupakan media informasi resmi yang menyajikan berita, layanan,
            serta dokumentasi kegiatan Dinas Komunikasi dan Informatika Kabupaten Belitung.
        </p>
    </div>
</section>

<!-- BERITA TERBARU -->
<section class="py-5">
    <div class="container">

        <div class="section-title">
            <h3>Berita Terbaru</h3>
        </div>

        <div class="row g-4">
            @foreach ($berita as $b)
            <div class="col-md-4">
                <div class="card berita-card h-100">
                    <img src="{{ asset('storage/' . $b->gambar) }}">
                    <div class="card-body">
                        <small class="text-muted">{{ $b->created_at->format('d M Y') }}</small>
                        <h6 class="fw-semibold mt-2">{{ $b->judul }}</h6>
                        <p>{{ Str::limit(strip_tags($b->isi), 90) }}</p>
                        <a href="/berita/{{ $b->id }}">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="/berita" class="btn btn-outline-primary">Lihat Semua Berita</a>
        </div>
    </div>
</section>

<!-- LAYANAN -->
<section class="bg-light py-5">
    <div class="container">

        <div class="section-title">
            <h3>Layanan</h3>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="layanan-card">
                    <div class="layanan-icon mb-3">
                        <i class="bi bi-briefcase-fill"></i>
                    </div>
                    <h5>Contoh 1</h5>
                    <p>ahhshhdshhashdhshashkj.</p>
                    <a href="/layanan">Lihat Layanan →</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="layanan-card">
                    <div class="layanan-icon mb-3">
                        <i class="bi bi-chat-dots-fill"></i>
                    </div>
                    <h5>Pengaduan</h5>
                    <p>whduhwhdwh.</p>
                    <a href="/kontak">Ajukan Pengaduan →</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="layanan-card">
                    <div class="layanan-icon mb-3">
                        <i class="bi bi-info-circle-fill"></i>
                    </div>
                    <h5>Informasi</h5>
                    <p>dqhdhoiqwhdhq.</p>
                    <a href="/profil/sejarah">Pelajari →</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- GALERI FOTO -->
<section class="bg-light py-5">
    <div class="container">

        <div class="section-title">
            <h3>Galeri Foto</h3>
        </div>

        <div class="row g-3">
            @foreach ($galeri as $g)
            <div class="col-md-3">
                <div class="galeri-item">
                    <img src="{{ asset('storage/' . $g->gambar) }}">
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="/galeri" class="btn btn-outline-primary">Lihat Galeri</a>
        </div>

    </div>
</section>

<!-- MEDIA SOSIAL -->
<section class="py-5">
    <div class="container">

        <div class="section-title">
            <h3>Media Sosial</h3>
        </div>

        <div class="row justify-content-center g-4">
            <!-- Instagram -->
            <div class="col-md-3 col-6">
                <a href="https://www.instagram.com/kominfobelitung?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="sosmed-card instagram">
                    <i class="bi bi-instagram"></i>
                    <h6>Instagram</h6>
                    <small>Kominfo Belitung</small>
                </a>
            </div>

            <!-- Facebook -->
            <div class="col-md-3 col-6">
                <a href="https://www.facebook.com/kominfobelitung?locale=id_ID" target="_blank" class="sosmed-card facebook">
                    <i class="bi bi-facebook"></i>
                    <h6>Facebook</h6>
                    <small>Kominfo Belitung</small>
                </a>
            </div>

            <!-- Youtube -->
            <div class="col-md-3 col-6">
                <a href="https://youtube.com/@kominfobelitungtv?si=e5hLMUOdMGMJYtXB" target="_blank" class="sosmed-card youtube">
                    <i class="bi bi-youtube"></i>
                    <h6>Youtube</h6>
                    <small>Kominfo Belitung TV</small>
                </a>
            </div>

            <!-- TikTok -->
            <div class="col-md-3 col-6">
                <a href="https://www.tiktok.com/@kominfobelitung?is_from_webapp=1&sender_device=pc" target="_blank" class="sosmed-card tiktok">
                    <i class="bi bi-tiktok"></i>
                    <h6>TikTok</h6>
                    <small>diskominfo belitung</small>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
