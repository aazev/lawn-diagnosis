@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="col-span-full flex flex-row flex-nowrap space-x-2">
        <a href="{{ route('admin.users.index') }}" class="flex grow flex-col items-center rounded-lg border border-gray-200 bg-white shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 md:flex-row">
            <div class="h-96 w-full rounded-t-lg object-cover text-center text-4xl font-bold md:h-auto md:w-48 md:rounded-none md:rounded-l-lg">
                {{ User::getCount() }}
            </div>
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Users</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Registered users.</p>
            </div>
        </a>
        <a href="{{ route('admin.issues.index') }}" class="flex grow flex-col items-center rounded-lg border border-gray-200 bg-white shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 md:flex-row">
            <div class="h-96 w-full rounded-t-lg object-cover text-center text-4xl font-bold md:h-auto md:w-48 md:rounded-none md:rounded-l-lg">
                {{ Issue::getCount() }}
            </div>
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Issues</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Registered lawn issues.</p>
            </div>
        </a>
        <a href="{{ route('admin.parameters.index') }}" class="flex grow flex-col items-center rounded-lg border border-gray-200 bg-white shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 md:flex-row">
            <div class="h-96 w-full rounded-t-lg object-cover text-center text-4xl font-bold md:h-auto md:w-48 md:rounded-none md:rounded-l-lg">
                {{ Parameter::getCount() }}
            </div>
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Parameters</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Registered issue parameters.</p>
            </div>
        </a>
    </div>
@endsection

@section('header')
    @include('layouts.admin.partials.header')
@endsection

@section('footer')
    @include('layouts.admin.partials.footer')
@endsection
