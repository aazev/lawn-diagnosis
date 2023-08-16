@extends('layouts.app')

@section('title')
    Lawn Diagnostics
@endsection

@section('content')
    <div id="app" />
    @viteReactRefresh
    @vite(['resources/ts/app.tsx'])
@endsection
