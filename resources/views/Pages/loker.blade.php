@extends('Layouts.navbar-utama')
@section('content')

<!-- Header Section -->
<section class="bg-half page-next-level"> 
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h4 class="text-uppercase title mb-4">Loker</h4>
                    <ul class="page-next d-inline-block mb-0">
                        <li><a href="{{ route('home.index') }}" class="text-uppercase font-weight-bold">Home</a></li>
                        <li><span class="text-uppercase text-white font-weight-bold">Loker</span></li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container py-5">
    <!-- Judul Halaman -->
    <div class="text-center mb-5">
        <h1>Daftar Lowongan Pekerjaan</h1>
        <p class="text-muted">Temukan pekerjaan yang sesuai dengan minat dan keahlian Anda.</p>
    </div>
    
    <!-- Daftar Kartu Pekerjaan -->
    <div class="row">
        <!-- Kartu Pekerjaan 1 -->
        <div class="col-lg-3 col-md-6 mt-4">
            <div class="job-card border rounded p-3 bg-white shadow-sm">
                <h5 class="job-title mt-2">Guru Sekolah Dasar (SD)</h5>
                <p class="company">Sekolah Negeri</p>
                <p class="location"><i class="mdi mdi-map-marker"></i> Jakarta Selatan, DKI Jakarta</p>
                <div class="info">
                    <span class="badge bg-primary">1 - 3 tahun</span>
                    <span class="badge bg-secondary">Minimal Sarjana (S1)</span>
                </div>
                <div class="status mt-2 d-flex align-items-center">
                    <span class="badge bg-success me-2">Aktif Merekrut</span>
                    <span class="badge bg-primary">Rp 3 jt - 4.5 jt</span>
                </div>
                <div class="apply-link mt-3">
                    <a href="#" class="text-primary">Lamar Sekarang <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <!-- Kartu Pekerjaan 2 -->
        <div class="col-lg-3 col-md-6 mt-4">
            <div class="job-card border rounded p-3 bg-white shadow-sm">
                <h5 class="job-title mt-2">Dosen Perguruan Tinggi</h5>
                <p class="company">Universitas Swasta</p>
                <p class="location"><i class="mdi mdi-map-marker"></i> Surabaya, Jawa Timur</p>
                <div class="info">
                    <span class="badge bg-primary">2 - 4 tahun</span>
                    <span class="badge bg-secondary">Minimal S2</span>
                </div>
                <div class="status mt-2 d-flex align-items-center">
                    <span class="badge bg-success me-2">Aktif Merekrut</span>
                    <span class="badge bg-primary">Rp 4 jt - 6 jt</span>
                </div>
                <div class="apply-link mt-3">
                    <a href="#" class="text-primary">Lamar Sekarang <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <!-- Kartu Pekerjaan 3 -->
        <div class="col-lg-3 col-md-6 mt-4">
            <div class="job-card border rounded p-3 bg-white shadow-sm">
                <h5 class="job-title mt-2">Konselor Pendidikan</h5>
                <p class="company">Bimbingan Konseling</p>
                <p class="location"><i class="mdi mdi-map-marker"></i> Bandung, Jawa Barat</p>
                <div class="info">
                    <span class="badge bg-primary">1 - 2 tahun</span>
                    <span class="badge bg-secondary">Minimal Sarjana (S1)</span>
                </div>
                <div class="status mt-2 d-flex align-items-center">
                    <span class="badge bg-success me-2">Aktif Merekrut</span>
                    <span class="badge bg-primary">Rp 5 jt - 7 jt</span>
                </div>
                <div class="apply-link mt-3">
                    <a href="#" class="text-primary">Lamar Sekarang <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <!-- Kartu Pekerjaan 4 -->
        <div class="col-lg-3 col-md-6 mt-4">
            <div class="job-card border rounded p-3 bg-white shadow-sm">
                <h5 class="job-title mt-2">Pengembang Kurikulum</h5>
                <p class="company">Kementerian Pendidikan</p>
                <p class="location"><i class="mdi mdi-map-marker"></i> Yogyakarta</p>
                <div class="info">
                    <span class="badge bg-primary">3 - 5 tahun</span>
                    <span class="badge bg-secondary">Minimal Sarjana (S1)</span>
                </div>
                <div class="status mt-2 d-flex align-items-center">
                    <span class="badge bg-success me-2">Aktif Merekrut</span>
                    <span class="badge bg-primary">Rp 6 jt - 8 jt</span>
                </div>
                <div class="apply-link mt-3">
                    <a href="#" class="text-primary">Lamar Sekarang <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <!-- Tambahkan Kartu Pekerjaan 5 sampai 15 -->
        <div class="col-lg-3 col-md-6 mt-4">
            <div class="job-card border rounded p-3 bg-white shadow-sm">
                <h5 class="job-title mt-2">Pekerjaan Contoh 5</h5>
                <p class="company">Perusahaan Contoh 5</p>
                <p class="location"><i class="mdi mdi-map-marker"></i> Kota Contoh 5</p>
                <div class="info">
                    <span class="badge bg-primary">1 - 5 tahun</span>
                    <span class="badge bg-secondary">Minimal Sarjana (S1)</span>
                </div>
                <div class="status mt-2 d-flex align-items-center">
                    <span class="badge bg-success me-2">Aktif Merekrut</span>
                    <span class="badge bg-primary">Rp 5 jt - 7 jt</span>
                </div>
                <div class="apply-link mt-3">
                    <a href="#" class="text-primary">Lamar Sekarang <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <!-- mencoba untuk membuat sisanya secara otomatis -->
        @foreach (range(6, 15) as $index)
            <div class="col-lg-3 col-md-6 mt-4">
                <div class="job-card border rounded p-3 bg-white shadow-sm">
                    <h5 class="job-title mt-2">Pekerjaan Contoh {{ $index }}</h5>
                    <p class="company">Perusahaan Contoh {{ $index }}</p>
                    <p class="location"><i class="mdi mdi-map-marker"></i> Kota Contoh {{ $index }}</p>
                    <div class="info">
                        <span class="badge bg-primary">1 - {{ $index }} tahun</span>
                        <span class="badge bg-secondary">Minimal Sarjana (S1)</span>
                    </div>
                    <div class="status mt-2 d-flex align-items-center">
                        <span class="badge bg-success me-2">Aktif Merekrut</span>
                        <span class="badge bg-primary">Rp {{ $index }} jt - {{ $index + 2 }} jt</span>
                    </div>
                    <div class="apply-link mt-3">
                        <a href="#" class="text-primary">Lamar Sekarang <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
</div>
@include('Layouts.footer-utama')
@endsection
