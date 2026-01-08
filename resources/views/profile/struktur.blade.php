@extends('layouts.app')

@section('content')
<div class="container py-5">

    <h3 class="fw-bold text-primary mb-4">{{ $profile->judul }}</h3>

    <div class="card shadow-sm border-0 p-4 text-center">

        @if($profile->gambar)
            <img src="{{ asset('img/profile/'.$profile->gambar) }}"
                 class="img-fluid mb-4"
                 style="max-height:500px;">
        @endif

        <div class="text-start">
            {!! nl2br(e($profile->isi)) !!}
        </div>

    </div>

</div>
@endsection
