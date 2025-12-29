@extends('layouts.app')

@section('content')
<div class="container py-5">

<h3 class="fw-bold text-primary mb-4 text-center">Layanan Kami</h3>

<div class="row g-4">
@foreach($layanans as $l)
<div class="col-md-4">
    <div class="card shadow-sm h-100">
        <div class="card-body">
            <h5 class="fw-bold">{{ $l->nama_layanan }}</h5>
            <p>{{ $l->deskripsi }}</p>
        </div>
    </div>
</div>
@endforeach
</div>

</div>
@endsection
