@extends('admin.layouts.app')

@section('content')

<h3 class="mb-4">Dashboard Admin</h3>

<div class="row g-3">

    <div class="col-md-3">
        <div class="card shadow-sm border-0 p-3">
            <h6>Layanan</h6>
            <h3 class="fw-bold">{{ $totalSlide }}</h3>
        </div>

    <div class="col-md-3">
        <div class="card shadow-sm border-0 p-3">
            <h6>Profil</h6>
            <h3 class="fw-bold">{{ $totalProfil }}</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm border-0 p-3">
            <h6>Layanan</h6>
            <h3 class="fw-bold">{{ $totalLayanan }}</h3>
        </div>

    <div class="col-md-3">
        <div class="card shadow-sm border-0 p-3">
            <h6>Berita</h6>
            <h3 class="fw-bold">{{ $totalBerita }}</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm border-0 p-3">
            <h6>Galeri</h6>
            <h3 class="fw-bold">{{ $totalGaleri }}</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm border-0 p-3">
            <h6>Pesan Masuk</h6>
            <h3 class="fw-bold">{{ $totalKontak }}</h3>
        </div>
    </div>

</div>

@endsection
