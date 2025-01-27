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
                <section class="d-flex flex-column justify-content-center align-items-center login-section" 
                style="background: url('{{ asset('Assets/images/2.png') }}') center center; background-size: cover; height: 100vh; padding: 10px;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-5 col-sm-8">
                            <div class="login-page">
                                <h4 class="text-center mb-2">Sign Up</h4>
                                <form method="POST" action="{{ route('signup.store') }}" enctype="multipart/form-data">
                                @csrf
                                <!-- Kategori Profesi -->
                                <div class="form-group mb-2">
                                    <label>Kategori Profesi <span class="text-danger">*</span></label>
                                    <select name="id_kategori_profesi" class="form-control" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategori_profesi as $kategori)
                                    <option value="{{ $kategori->id }}" {{ old('id_kategori_profesi') == $kategori->id ? 'selected' : '' }}>
                                        {{ $kategori->kategori_profesi }}
                                    </option>
                                @endforeach
                            </select>
                            <!-- Nama -->
                            <div class="form-group mb-2">
                                <label>Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Full Name" name="nama" value="{{ old('nama') }}" required>
                                @error('nama')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-2">
                                <label>Your Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        <!-- Password -->
                        <div class="form-group mb-2">
                            <label>Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Minat -->
                        <div class="form-group mb-2">
                            <label>Minat</label>
                            <input type="text" class="form-control" placeholder="Minat Anda" name="minat" value="{{ old('minat') }}">
                            @error('minat')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Bio -->
                        <div class="form-group mb-2">
                            <label>Bio</label>
                            <textarea class="form-control" placeholder="Ceritakan tentang diri Anda" name="bio">{{ old('bio') }}</textarea>
                            @error('bio')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                    </form>
                    <div class="text-center mt-1">
                        <p>Sudah punya akun? <a href="{{ route('login.index') }}" class="text-primary">Login</a></p>
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
