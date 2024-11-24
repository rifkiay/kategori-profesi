<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jobya - Sign Up</title>
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
                                    <h4 class="mb-4">Sign Up</h4>  
                                </div>
                                <form class="signup-form" id="signupForm">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Full Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Full Name" name="name" id="name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-0">
                                            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                                        </div>
                                        <div class="col-12 text-center mt-3">
                                            <p id="error-message" class="text-danger" style="display: none;">Error in signing up!</p>
                                        </div>
                                    </div>
                                </form>
                                <div class="text-center mt-3">
                                    <p>Sudah punya akun? <a href="{{ url('login') }}" class="text-primary">Login</a></p>
                                </div>
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
    
    <!-- Script untuk validasi sign up -->
    <script>
        document.querySelector('#signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var nameInput = document.querySelector('#name').value;
            var emailInput = document.querySelector('#email').value;
            var passwordInput = document.querySelector('#password').value;
            
            // Simpan data user di localStorage untuk keperluan testing
            localStorage.setItem('user_name', nameInput);
            localStorage.setItem('user_email', emailInput);
            localStorage.setItem('user_password', passwordInput);

            alert('Sign Up berhasil!');
            // Simpan status login di sesi lokal
            localStorage.setItem('user_logged_in', true);
            window.location.href = '/'; // Redirect ke halaman home
        });
    </script>
</body>
</html>
