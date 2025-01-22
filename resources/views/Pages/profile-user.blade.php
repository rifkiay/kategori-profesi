@extends('Layouts.navbar-utama')
@section('content')

   <!-- Header Section -->
   <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">MY PROFILE</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li><span class="text-uppercase text-white font-weight-bold">My Profile</span></li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Detail Profil Pengguna -->
    <section class="profile-details container mt-4 mb-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card shadow-lg p-4">
                    <div class="text-center">
                        <img src="{{ asset('Assets/images/profile.png') }}" alt="Avatar Pengguna" class="rounded-circle mb-2" style="width: 100px; height: 100px; border: 4px solid #ffffff;">
                        <h3 class="font-weight-bold mb-1">{{ Auth::user()->name }}</h3>
                        <p class="text-muted mb-1">{{ Auth::user()->email }}</p>
                    </div>

                    <div class="px-3"> <!-- Memberi padding di kiri dan kanan -->
                        <h5 class="font-weight-bold mb-2">Informasi Kontak</h5>
                        <div class="form-group">
                            <label class="font-weight-bold">Email</label>
                            <input type="text" class="form-control" value="first.last@example.com" readonly>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Telepon</label>
                            <input type="text" class="form-control" value="+62 812 3456 7890" readonly>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">LinkedIn</label>
                            <input type="text" class="form-control" value="linkedin.com/in/johndoe" readonly>
                        </div>
        
                        <h5 class="font-weight-bold mb-2">Informasi Pekerjaan</h5>
                        <div class="form-group">
                            <label class="font-weight-bold">Perusahaan Saat Ini</label>
                            <input type="text" class="form-control" value="Google Inc." readonly>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Pengalaman Kerja</label>
                            <textarea class="form-control" rows="2" readonly>Senior Product Designer, Google (2019 - Sekarang)
UX Designer, Facebook (2015 - 2019)</textarea>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Keahlian Utama</label>
                            <input type="text" class="form-control" value="UI/UX Design, Figma, Adobe XD, User Research" readonly>
                        </div>

                        <h5 class="font-weight-bold mb-2">Tentang Saya</h5>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut ex non enim dapibus cursus. Fusce in metus sit amet purus tristique scelerisque.</textarea>
                        </div>
                    </div>

                    <div class="text-center mt-3">
                        <a href="{{ url('/profile/edit') }}" class="btn btn-primary">Edit Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('Layouts.footer-utama')
@endsection
