<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jobya - Login</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('Assets/images/favicon.ico') }}">
    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="{{ asset('Assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/materialdesignicons.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/selectize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/style.min.css') }}" type="text/css">
</head>
<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Back to home -->
    <div class="back-to-home rounded d-none d-sm-block">
        <a href="{{ url('/') }}" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-home"></i></a>
    </div>
    <!-- Hero Start -->
    <section class="vh-100" style="background: url('{{ asset('Assets/images/user.jpg') }}') center center;">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="login-page bg-white shadow rounded p-4">
                                <div class="text-center">
                                    <h4 class="mb-4">Login</h4>  
                                </div>
                                <form class="login-form" id="loginForm">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-0">
                                            <button type="submit" class="btn btn-primary w-100">Sign in</button>
                                        </div>
                                        <div class="col-12 text-center mt-3">
                                            <p id="error-message" class="text-danger" style="display: none;">Username atau password salah!</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Javascript -->
    <script src="{{ asset('Assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('Assets/js/plugins.js') }}"></script>
    <script src="{{ asset('Assets/js/selectize.min.js') }}"></script>
    <script src="{{ asset('Assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('Assets/js/app.js') }}"></script>
    
    <!-- Script untuk validasi login -->
    <script>
        document.querySelector('#loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var emailInput = document.querySelector('#email').value;
            var passwordInput = document.querySelector('#password').value;
            var userData = {
                email: 'admin@gmail.com',
                password: 'admin123'
            };
            if (emailInput === userData.email && passwordInput === userData.password) {
                alert('Login berhasil!');
                // Simpan status login di sesi lokal
                localStorage.setItem('user_logged_in', true);
                window.location.href = '/dashboard'; // Redirect ke halaman Dashboard
            } else {
                alert('Email atau password salah!');
            }
        });
    </script>
</body>
</html>