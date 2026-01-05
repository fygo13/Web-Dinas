@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-4">
    <h4 class="fw-bold">Pesan Masuk</h4>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th width="5%">No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kontak as $c)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $c->nama }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ Str::limit($c->pesan, 50) }}</td>
                    <td>
                        <a href="{{ route('admin.kontak.show', $c->id) }}"
                           class="btn btn-sm btn-primary">
                            Detail
                        </a>

                        <form action="{{ route('admin.kontak.delete', $c->id) }}"
                              method="POST" class="d-inline"
                              onsubmit="return confirm('Hapus pesan ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">
                        Belum ada pesan masuk
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>

@endsection
