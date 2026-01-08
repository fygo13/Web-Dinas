@extends('layouts.guest')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-600 to-indigo-700 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-10 space-y-8 bg-primary p-8 rounded-lg shadow-lg">

        <!-- Logo / Judul -->
         <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">
                Login
            </h1>
            <p class="text-sm text-gray-600">
                Silakan masuk untuk ke admin
            </p>
         </div>

        <!-- error message -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Form Login -->
        <form class="space-y-6" action="{{ route('login') }}" method="POST">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" name="email" type="email" required autofocus
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm
                              placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" name="password" type="password" required
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm
                              placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Button -->
            <x-primary-button class="w-full justify-center bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500">
                Masuk
            </x-primary-button>
        </form>

    </div>
</div>