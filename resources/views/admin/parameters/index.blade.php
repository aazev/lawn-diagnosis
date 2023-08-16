@extends('layouts.admin')

@section('content')
    <h1 class="mb-10 text-2xl font-bold">Parameters</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
            <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Parameter Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Possible values
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($parameters as $parameter)
                    <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                        <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $parameter->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $parameter->description }}
                        </td>
                        <td class="px-6 py-4 uppercase">
                            {{ count($parameter->possible_values) }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('admin.parameters.update', $parameter->id) }}" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('header')
    @include('layouts.admin.partials.header')
@endsection

@section('footer')
    @include('layouts.admin.partials.footer')
@endsection
