<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Admin Panel' }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
        }
        .sidebar {
            height: 100vh;
            background: #0d6efd;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            padding: 12px 15px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: rgba(255,255,255,0.2);
        }
        .sidebar .active {
            background: rgba(255,255,255,0.4);
            font-weight: bold;
        }
        .topbar {
            background: white;
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item"><a href="/admin" class="nav-link">Dashboard</a></li>
            <li class="nav-item"><a href="/admin/slide" class="nav-link">Slide</a></li>
            <li class="nav-item"><a href="/admin/profil" class="nav-link">Profil</a></li>
            <li class="nav-item"><a href="/admin/berita" class="nav-link">Berita</a></li>
            <li class="nav-item"><a href="/admin/galeri" class="nav-link">Galeri</a></li>
            <li class="nav-item"><a href="/admin/layanan" class="nav-link">Layanan</a></li>
            <li class="nav-item"><a href="/admin/kontak" class="nav-link">Pesan Masuk</a></li>
        </ul>
    </div>


    <!-- MAIN CONTENT -->
    <div class="flex-grow-1">

        <!-- TOPBAR -->
        <div class="topbar d-flex justify-content-between">
            <h5 class="m-0">{{ $title ?? '' }}</h5>
            <span>Halo, {{ auth()->user()->name }}</span>
        </div>

        <div class="p-4">
            @yield('content')
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
