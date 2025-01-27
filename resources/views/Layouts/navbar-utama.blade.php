<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Jobtiva')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('Assets/images/favicon.ico') }}">

    <!-- Link to Google Fonts (Nunito) -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="{{ asset('Assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/materialdesignicons.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/fontawesome.css') }}" type="text/css">
    
    <link rel="stylesheet" href="{{ asset('Assets/css/selectize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/style.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/style.css') }}" type="text/css">

    <!-- Custom CSS for Scroll Color Change -->
    <style>
        /* Default profile text color (white) */
        .profile-text {
            color: white;
            transition: color 0.3s ease;
        }

        /* Profile text color after scroll (black) */
        .scrolled .profile-text {
            color: black;
        }
    </style>
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
        <!-- Navbar Flexbox -->
        <div class="d-flex align-items-center justify-content-between w-100">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('Assets/images/logo-light.png') }}" alt="Logo" class="logo-light" height="18" />
                <img src="{{ asset('Assets/images/logo-dark-utama.png') }}" alt="Logo" class="logo-dark" height="18" />
            </a>

            <!-- Menu Navigasi di Tengah -->
            <div id="navigation" class="mx-auto">
                <ul class="navigation-menu d-flex align-items-center">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ route('home.about') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('kategori.index') }}">Profesi</a></li>
                    <li><a href="{{ route('home.contact') }}">Kontak</a></li>
                </ul>
            </div>

            @guest
                <div class="buy-button">
                    <a href="{{ url('login') }}" class="btn btn-primary"><i class="mdi mdi-account"></i> Masuk</a>
                </div>
                <div class="buy-button ms-2">
                    <a href="{{ url('signup') }}" class="btn btn-secondary"><i class="mdi mdi-account-plus"></i> Daftar</a> <!-- Sign Up Button -->
                </div>
            @endguest

            @auth
                <!-- Profil di Ujung Kanan dengan Dropdown -->
                <div class="dropdown ms-3">
                    <button class="btn btn-link d-flex align-items-center profile-name" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('Assets/images/profile-default.jpg') }}" alt="User Avatar" class="rounded-circle" width="32" height="32">
                        <span class="ms-2 profile-text">{{ Auth::user()->nama }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="{{ route('user.index') }}">Profile</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth
        </div>
    </div>
</header>


    <!-- Content -->
    @yield('content')

    <script>
        var loginUrl = "{{ url('login') }}";
    </script>

    <!-- Scroll Detection Script -->
    <script>
        window.addEventListener("scroll", function() {
            var header = document.getElementById("topnav");
            if (window.scrollY > 50) { // Adjust scroll distance as needed
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });
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
