<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jobtiva - Sign Up</title>
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
    <section class="vh-100" style="background: url('{{ asset('Assets/images/2.png') }}') center center; background-size: cover; width: 100%;">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="login-page bg-white shadow rounded p-4">
                                <div class="text-center">
                                    <h4 class="mb-4">Sign Up</h4>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif  
                                </div>
                                <!-- Form Start -->
                                <form method="POST" action="{{ route('signup.store') }}">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label>Kategori Profesi <span class="text-danger">*</span></label>
                                        <select name="id_kategori_profesi" class="form-control" required>
                                            <option value=""> Pilih Kategori </option>
                                            @foreach ($kategori_profesi as $kategori)
                                                <option value="{{ $kategori->id }}">{{ $kategori->kategori_profesi }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Full Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Full Name" name="nama" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Your Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                                    </div>
                                    <div class="text-center mt-3">
                                        <p>Sudah punya akun? <a href="{{ route('login.index') }}" class="text-primary">Login</a></p>
                                    </div>
                                </form>
                                <!-- Form End -->
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
</body>
</html>
