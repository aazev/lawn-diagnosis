<!DOCTYPE html>
<html lang="en" class="h-screen">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/admin.css'])
</head>

<body class="grid h-full grid-cols-admin grid-rows-admin bg-blue-100 grid-areas-admin">
    @yield('header')
    <div id="content" class="p-2 grid-in-content lg:p-8">
        @yield('content')
    </div>
    @yield('footer')
    @vite('resources/js/admin.js')
</body>

</html>
