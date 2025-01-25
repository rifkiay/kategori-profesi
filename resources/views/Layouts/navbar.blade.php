<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Jobtiva')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('Assets/images/favicon.ico') }}">

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="{{ asset('Assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/materialdesignicons.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/fontawesome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/selectize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/style.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Loader (optional) -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <header id="topnav" class="defaultscroll scroll-active">
    <div class="container">
        <!-- Logo container -->
        <div>
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('Assets/images/logo-light.png') }}" alt="Logo" class="logo-light" height="18" />
                <img src="{{ asset('Assets/images/logo-dark-utama.png') }}" alt="Logo" class="logo-dark" height="18" />
            </a>
        </div>

        <!-- Navigation Menu dan Tombol Masuk/Profil -->
        <div id="navigation-wrapper">
            <ul class="navigation-menu">
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="{{ url('about') }}">Tentang Kami</a></li>
                <li><a href="#kategori-profesi">Profesi</a></li>
                <li><a href="{{ url('contact') }}">Kontak</a></li>
            </ul>

            <!-- Cek Apakah Pengguna Sudah Login -->
            @if(Auth::check())
                <!-- Tampilkan Profil Pengguna -->
                <div class="profile-section">
                    <a href="{{ url('profile') }}" class="profile-link">
                        <img src="{{ Auth::user()->profile_picture_url ?? asset('Assets/images/default-profile.png') }}" alt="{{ Auth::user()->name }}" class="profile-picture" />
                        <span>{{ Auth::user()->name }}</span>
                    </a>
                </div>
            @else
                <!-- Tampilkan Tombol Masuk -->
                <div class="buy-button">
                    <a href="{{ url('login') }}" class="btn btn-primary"><i class="mdi mdi-account"></i> Masuk</a>
                </div>
            @endif
        </div>
    </div>
</header>

    <!-- Content -->
    @yield('content')

    <script>
        var loginUrl = "{{ url('login') }}";
    </script>

    <!-- Scripts -->
    <script src="{{ asset('Assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('Assets/js/plugins.js') }}"></script>
    <script src="{{ asset('Assets/js/selectize.min.js') }}"></script>
    <script src="{{ asset('Assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Assets/js/app.js') }}"></script>
    <script src="{{ asset('Assets/js/home.js') }}"></script>
</body>

</html>
