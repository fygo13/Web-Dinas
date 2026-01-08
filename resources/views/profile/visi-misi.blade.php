@extends('layouts.app')

@section('content')
<div class="container py-5">

    <h3 class="fw-bold text-primary mb-4">{{ $profile->judul }}</h3>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm border-0 p-4">
                {!! nl2br(e($profile->isi)) !!}
            </div>
        </div>
    </div>

</div>
@endsection
