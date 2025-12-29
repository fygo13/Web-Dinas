@extends('admin.layouts.app')

@section('content')
<div class="container py-4">

    <h2 class="mb-4">Kelola Galeri</h2>

    <a href="/admin/galeri/create" class="btn btn-primary mb-3">+ Tambah Foto</a>

    <div class="card shadow-sm">
        <div class="card-body">

            <div class="row">
                @forelse ($galeri as $g)
                    <div class="col-md-3 mb-4">
                        <div class="border rounded p-2 shadow-sm">

                            <img src="/storage/{{ $g->gambar }}" 
                                 class="img-fluid rounded mb-2" 
                                 alt="Foto Galeri">

                            <h6 class="text-center">{{ $g->judul }}</h6>

                            <div class="d-flex justify-content-center gap-2 mt-2">

                                <a href="/admin/galeri/{{ $g->id }}/edit" 
                                   class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <form action="/admin/galeri/{{ $g->id }}" 
                                      method="POST" 
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Hapus foto ini?')" 
                                            class="btn btn-sm btn-danger">
                                        Hapus
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">Belum ada foto galeri.</p>
                @endforelse
            </div>

        </div>
    </div>

</div>
@endsection
