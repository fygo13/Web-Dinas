<?php

use Illuminate\Support\Facades\Route;

// Admin Controllers
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\Admin\LayananController as AdminLayananController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;

// Publik Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;


// Halaman Beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

// BERITA
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

// GALERI
Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri.index');

// LAYANAN
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');

// KONTAK & Kirim PESAN
Route::get('/kontak', [ContactController::class, 'index'])->name('kontak.index');
Route::post('/kontak/kirim', [ContactController::class, 'store'])->name('kontak.store');

// PROFIL (Dropdown 3 Menu)
Route::prefix('profil')->name('profil.')->group(function () {

    // Sejarah
    Route::get('/sejarah', [ProfileController::class, 'sejarah'])->name('sejarah');

    // Struktur Organisasi
    Route::get('/struktur', [ProfileController::class, 'struktur'])->name('struktur');

    // Visi & Misi
    Route::get('/visi-misi', [ProfileController::class, 'visiMisi'])->name('visi-misi');

});

// AUTH (LOGIN / REGISTER) BREEZE
require __DIR__.'/auth.php';


// Admin
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Login
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');

    // Dashboard Admin
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // SLIDE
    Route::get('/slide', [App\Http\Controllers\Admin\SlideController::class, 'index'])->name('slide.index');
    Route::get('/slide/tambah', [App\Http\Controllers\Admin\SlideController::class, 'create'])->name('slide.create');
    Route::post('/slide/store', [App\Http\Controllers\Admin\SlideController::class, 'store'])->name('slide.store');
    Route::get('/slide/edit/{id}', [App\Http\Controllers\Admin\SlideController::class, 'edit'])->name('slide.edit');
    Route::post('/slide/update/{id}', [App\Http\Controllers\Admin\SlideController::class, 'update'])->name('slide.update');
    Route::delete('/slide/delete/{id}', [App\Http\Controllers\Admin\SlideController::class, 'destroy'])->name('slide.delete');

    // PROFILE
    Route::get('/profil', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('profil.index');
    Route::get('/profil/edit/{id}', [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('profil.edit');
    Route::post('/profil/update/{id}', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profil.update');

    // LAYANAN
    Route::resource('/layanan', App\Http\Controllers\Admin\LayananController::class);

    // BERITA
    Route::resource('/berita', App\Http\Controllers\Admin\BeritaController::class);

    // GALERI
    Route::get('/galeri', [App\Http\Controllers\Admin\GalleryController::class, 'index'])->name('galeri.index');
    Route::get('/galeri/tambah', [App\Http\Controllers\Admin\GalleryController::class, 'create'])->name('galeri.create');
    Route::post('/galeri/store', [App\Http\Controllers\Admin\GalleryController::class, 'store'])->name('galeri.store');
    Route::delete('/galeri/{id}', [App\Http\Controllers\Admin\GalleryController::class, 'destroy'])->name('galeri.delete');

    // KONTAK
    Route::get('/kontak', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('kontak.index');
    Route::get('/kontak/{id}', [App\Http\Controllers\Admin\ContactController::class, 'show'])->name('kontak.show');
    Route::delete('/kontak/{id}', [App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('kontak.delete');

    // Logout
    Route::post('/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');

});
