<div style="background:#00008B; color:white; font-size:14px; padding:6px 0;">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="navbar-icon d-flex align-items-center">
            <i class="bi bi-envelope-open me-1"></i> kominfo@belitung.go.id
            <span class="mx-3" style="opacity:.4;">|</span>
            <i class="bi bi-telephone me-1"></i> Call Center: (0719) 123456
        </div>

        <div class="d-flex align-items-center">

            <!-- JADWAL PELAYANAN -->
            <div class="dropdown me-2">
                <a class="text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                   style="text-decoration:none;">
                    <i class="bi bi-clock me-1"></i> Jadwal Pelayanan
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow" style="font-size:13px;">
                    <li class="dropdown-header fw-bold text-center text-primary">Hari Operasional</li><hr>
                    <li><span class="dropdown-item">Senin  : 07.30 – 16.00</span></li><hr>
                    <li><span class="dropdown-item">Selasa : 07.30 – 16.00</span></li><hr>
                    <li><span class="dropdown-item">Rabu   : 07.30 – 16.00</span></li><hr>
                    <li><span class="dropdown-item">Kamis  : 07.30 – 16.00</span></li><hr>
                    <li><span class="dropdown-item">Jumat  : 07.30 – 16.30</span></li><hr>
                    <li><span class="dropdown-item">Sabtu  : Libur</span></li><hr>
                    <li><span class="dropdown-item">Minggu : Libur</span></li><hr>
                </ul>
            </div>

        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg sticky-top shadow-sm" style="background:white;">
    <div class="container py-2">

        <!-- LOGO + TEXT -->
        <a class="navbar-brand d-flex align-items-center" href="/" style="font-weight:700; font-size:22px;">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" height="70" class="me-1">

            <div style="line-height:16px;">
                <span style="color:#0069D9;">diskominfo</span><br>
                <span style="font-size:12px; color:#14A2B8;">Dinas Komunikasi dan Informatika Belitung</span>
            </div>
        </a>

        <!-- TOGGLER -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarMain">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/">Beranda</a>
                </li>

                <!-- DROPDOWN PROFIL -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold" href="#" data-bs-toggle="dropdown">
                        Profil
                    </a>
                    <ul class="dropdown-menu shadow-sm">
                        <li><a class="dropdown-item" href="/profil/sejarah">Sejarah</a></li>
                        <li><a class="dropdown-item" href="/profil/visi-misi">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="/profil/struktur">Struktur Organisasi</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link fw-semibold" href="/layanan">Layanan</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold" href="/berita">Berita</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold" href="/galeri">Galeri</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold" href="/kontak">Hubungi Kami</a></li>

            </ul>
        </div>
    </div>
</nav>
