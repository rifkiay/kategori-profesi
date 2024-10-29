<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Jobya')</title>
    <link rel="stylesheet" href="{{ asset('Assets/css/bootstrap.min.css') }}">
</head>
<body>

    {{-- Pengecekan untuk memuat navbar yang sesuai --}}
    @if(session()->has('user'))
        @include('Layouts.navbar-admin')
    @else
        @include('Layouts.navbar-utama')
    @endif

    {{-- Tempat konten --}}
    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="{{ asset('Assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
