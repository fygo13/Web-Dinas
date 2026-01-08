@extends('layouts.app')

@section('content')

<!-- HEADER -->
<section class="bg-primary text-white py-5">
    <div class="container text-center">
        <h2 class="fw-bold">Kontak & Pengaduan</h2>
        <p class="mb-0">Sampaikan pertanyaan, kritik, atau pengaduan Anda</p>
    </div>
</section>

<!-- KONTAK -->
<section class="py-5">
    <div class="container">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row g-4">

            <!-- INFO -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Informasi Kontak</h5>

                        <p>
                            <i class="bi bi-geo-alt"></i>
                            Jl. Contoh Alamat Dinas, Belitung
                        </p>

                        <p>
                            <i class="bi bi-envelope"></i>
                            info@dinasbelitung.go.id
                        </p>

                        <p>
                            <i class="bi bi-telephone"></i>
                            (0719) 123456
                        </p>

                        <hr>

                        <p class="text-muted small">
                            Jam Pelayanan:<br>
                            Senin – Kamis: 07.30 – 16.00<br>
                            Jumat: 07.30 – 16.30
                        </p>
                    </div>
                </div>
            </div>

            <!-- FORM -->
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body">

                        <h5 class="fw-bold mb-3">Form Pengaduan</h5>

                        <form action="{{ route('kontak.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama"
                                       class="form-control"
                                       value="{{ old('nama') }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email"
                                       class="form-control"
                                       value="{{ old('email') }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Pesan</label>
                                <textarea name="pesan" rows="5"
                                          class="form-control"
                                          required>{{ old('pesan') }}</textarea>
                            </div>

                            <button class="btn btn-primary">
                                <i class="bi bi-send"></i> Kirim Pesan
                            </button>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
