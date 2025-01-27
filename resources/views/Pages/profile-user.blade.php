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
                        <li><a href="{{ url('/') }}" class="text-uppercase font-weight-bold">Home</a></li>
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

                    <!-- Foto Profil -->
                    <img src="{{ asset('Assets/images/profile-default.jpg') }}" 
                    alt="Foto Profil Default" 
                    class="rounded-circle mb-2" 
                    style="width: 100px; height: 100px; border: 4px solid #ffffff;">

                    <!-- Nama dan Email -->
                    <h3 class="font-weight-bold mb-1">{{ Auth::user()->nama }}</h3>
                    <p class="text-muted mb-1">{{ Auth::user()->email }}</p>
                </div>

                <!-- Informasi -->
                <div class="px-3">
                    <h5 class="font-weight-bold mb-3">Informasi Pribadi</h5>
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Nama</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->nama }}" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Email</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->email }}" readonly>
                    </div>
                    <div class="form-group mb-3">

                    <!-- Kategori Profesi -->
                    @php
                        use App\Models\KategoriProfesi;

                        $kategori_profesi = KategoriProfesi::all(); // Ambil semua data kategori profesi
                        $kategoriNama = 'Belum diatur'; // Default jika kategori tidak ditemukan

                        foreach ($kategori_profesi as $kategori) {
                            if ($kategori->id == Auth::user()->id_kategori_profesi) {
                                $kategoriNama = $kategori->kategori_profesi;
                                break;
                            }
                        }
                    @endphp
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Kategori Profesi</label>
                        <input type="text" class="form-control" value="{{ $kategoriNama }}" readonly>
                    </div>
                    
                    <!-- Minat -->
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Minat</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->minat ?? 'Belum diisi' }}" readonly>
                    </div>

                    <!-- Bio -->
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Bio</label>
                        <textarea class="form-control" rows="3" readonly>{{ Auth::user()->bio ?? 'Belum diisi' }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('Layouts.footer-utama')
@endsection
