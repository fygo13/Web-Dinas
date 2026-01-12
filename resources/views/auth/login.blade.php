@extends('layouts.guest')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100">

    <div class="login-card shadow-lg p-4 text-white">

        <div class="text-center mb-4">
            <h3 class="fw-bold mb-1">Admin Panel</h3>
            <small class="opacity-75">Website Dinas Kabupaten</small>
        </div>

        {{-- ERROR LOGIN --}}
        @if ($errors->any())
            <div class="alert alert-danger small text-center">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label small">Email</label>
                <input type="email"
                       name="email"
                       class="form-control"
                       placeholder="Masukkan email"
                       required autofocus>
            </div>

            <div class="mb-4">
                <label class="form-label small">Password</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Masukkan password"
                       required>
            </div>

            <div class="d-grid">
                <button class="btn btn-login fw-semibold">
                    Login
                </button>
            </div>
        </form>

        <div class="text-center mt-4">
            <small class="opacity-75">
                © {{ date('Y') }} Dinas Pemerintahan
            </small>
        </div>

    </div>

</div>
@endsection
