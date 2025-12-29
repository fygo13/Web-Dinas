@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<!-- Hero Section -->
<section class="relative bg-cover bg-center h-64" style="background-image: url('/img/kontak.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative z-10 flex items-center justify-center h-full">
        <h1 class="text-primary text-center text-4xl font-bold">Kontak Kami</h1>
    </div>
</section>

<!-- Kontak Section -->
<section class="py-16 px-6 md:px-16 lg:px-28">
    <div class="grid md:grid-cols-2 gap-12">

        <!-- Form Kontak -->
        <div>
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-6">Kirim Pesan</h2>

            <form action="{{ route('kontak.kirim') }}" method="POST" class="space-y-5 text-center">
                @csrf

                <div>
                    <label class="font-semibold">Nama Lengkap</label>
                    <input type="text" name="nama" required 
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="font-semibold">Email</label>
                    <input type="email" name="email" required
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="font-semibold">Subjek</label>
                    <input type="text" name="subjek" required
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="font-semibold">Pesan</label>
                    <textarea name="pesan" rows="5" required
                              class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <button type="submit" 
                        class="bg-blue-600 hover:bg-blue-700 text-dark px-6 py-2 rounded-lg shadow">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
