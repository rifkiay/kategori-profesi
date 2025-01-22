<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Jobya')</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="{{ asset('Assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/css/style.css') }}">
</head>
<body>
    <!-- Navbar -->
    @include('Layouts.navbar-utama') <!-- Include navbar -->

    <!-- Main Content -->
    <main>
        @yield('content') <!-- Tempat konten dinamis -->
    </main>

    <!-- Footer -->
    @include('Layouts.footer') <!-- Include footer -->

    <!-- Scripts -->
    <script src="{{ asset('Assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Assets/js/app.js') }}"></script>
</body>
</html>
