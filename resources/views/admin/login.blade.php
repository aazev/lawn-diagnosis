@extends('layouts.admin')

@section('title')
    Lawn Diagnosis - Admin Login
@endsection

@section('content')
    <div class="flex h-full items-center justify-center">
        <div class="m-auto w-96 rounded-lg bg-white p-8 shadow-md dark:bg-gray-800">
            <h1 class="mb-4 text-2xl font-bold">Login</h1>
            @if (session('error'))
                <div class="relative mb-4 rounded-md border border-red-400 bg-red-100 px-4 py-3 text-center text-red-700 transition-opacity duration-500" data-error>
                    {{ session('error') }}
                    <button onclick="hideErrorMessage(this, 0)" class="absolute right-2 top-2 text-xl leading-none hover:text-red-500">&times;</button>
                </div>
            @endif
            <form action="/auth" method="post">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" required class="@error('email') border-red-500 @enderror mt-1 w-full rounded-md border p-2">
                    @error('email')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required class="@error('password') border-red-500 @enderror mt-1 w-full rounded-md border p-2">
                    @error('password')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember_me" name="remember" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>
                    <a href="#" class="text-sm text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
                </div>
                <div class="mt-4">
                    <button type="submit" class="w-full rounded-md bg-indigo-600 p-2 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
