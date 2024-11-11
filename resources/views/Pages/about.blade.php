@extends('layouts.navbar-utama')

@section('title', 'Tentang Kami')

@section('content')

<!-- Header Section -->
<section class="bg-half page-next-level"> 
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h4 class="text-uppercase title mb-4">Tentang Kami</h4>
                    <ul class="page-next d-inline-block mb-0">
                        <li><a href="{{ url('/') }}" class="text-uppercase font-weight-bold">Beranda</a></li>
                        <li><span class="text-uppercase text-white font-weight-bold">Tentang Kami</span></li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tentang Kami Section -->
<div class="container my-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Gambar di Kiri -->
            <div class="col-md-4">
                <img src="{{ asset('Assets/images/about.jpg') }}" alt="Tentang Kami" class="img-fluid rounded shadow-sm">
            </div>

            <!-- Konten di Kanan -->
                <div class="col-md-8">
                <p class="about-description">
                    Selamat datang di platform kami! Kami berkomitmen untuk menyediakan informasi lengkap mengenai berbagai profesi. Tujuan utama kami adalah membantu Anda memahami setiap profesi secara mendalam, mulai dari deskripsi pekerjaan hingga keterampilan yang diperlukan.
                </p>

                <ul class="list-unstyled about-features">
                    <li class="d-flex align-items-center mb-2">
                        <i class="mdi mdi-check-circle-outline text-primary me-2"></i>
                        <span>Informasi lengkap dan terperinci tentang profesi</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <i class="mdi mdi-check-circle-outline text-primary me-2"></i>
                        <span>Deskripsi tanggung jawab dan keterampilan</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <i class="mdi mdi-check-circle-outline text-primary me-2"></i>
                        <span>Wawasan tentang jalur karier dan pengembangan</span>
                    </li>
                </ul>

                <p class="about-footer">
                    Platform ini dirancang untuk mendukung perjalanan karier Anda, memberikan informasi yang berguna dan relevan untuk membantu Anda dalam pengambilan keputusan.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- How It Works Section -->
<div class="container my-5" style="padding-top: 5px;">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title title-line pb-5">Cara Kerja</h4>
                    <p class="text-muted para-desc mx-auto mb-1">Ikuti langkah-langkah sederhana untuk memaksimalkan informasi yang Anda dapatkan tentang berbagai profesi.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Step 1: Buat Akun -->
            <div class="col-md-4 mt-4 pt-2">
                <div class="how-it-work-box p-4 text-center rounded shadow bg-white">
                    <div class="how-it-work-img position-relative rounded-circle mb-3 mx-auto" style="background-color: #f0f8ff; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <img src="{{ asset('Assets/images/how-it-work/img-1.png') }}" alt="" height="40">
                    </div>
                    <h5 class="mb-3">Buat Akun</h5>
                    <p class="text-muted">Mulailah dengan membuat akun untuk menyimpan profesi yang diminati dan mendapatkan rekomendasi personal.</p>
                </div>
            </div>
            
            <!-- Step 2: Jelajahi Profesi -->
            <div class="col-md-4 mt-4 pt-2">
                <div class="how-it-work-box p-4 text-center rounded shadow bg-white">
                    <div class="how-it-work-img position-relative rounded-circle mb-3 mx-auto" style="background-color: #f5f5dc; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <img src="{{ asset('Assets/images/how-it-work/img-2.png') }}" alt="" height="40">
                    </div>
                    <h5 class="mb-3">Jelajahi Profesi</h5>
                    <p class="text-muted">Telusuri deskripsi pekerjaan, keterampilan yang dibutuhkan, serta potensi pengembangan di setiap profesi.</p>
                </div>
            </div>
            
            <!-- Step 3: Susun Rencana Karier -->
            <div class="col-md-4 mt-4 pt-2">
                <div class="how-it-work-box p-4 text-center rounded shadow bg-white">
                    <div class="how-it-work-img position-relative rounded-circle mb-3 mx-auto" style="background-color: #e6e6fa; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <img src="{{ asset('Assets/images/how-it-work/img-3.png') }}" alt="" height="40">
                    </div>
                    <h5 class="mb-3">Susun Rencana Karier</h5>
                    <p class="text-muted">Gunakan informasi untuk menentukan jalur pendidikan dan keterampilan yang dibutuhkan untuk mencapai karier impian.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title title-line pb-5">Perusahaan Mitra</h4>
                    <p class="text-muted para-desc mx-auto mb-1">Kenali berbagai perusahaan yang bekerja sama dengan kami.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Example Partner 1 -->
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="company-card border rounded p-3 bg-white">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('Assets/images/blog/img-1.jpg') }}" class="company-logo me-3" alt="Company Logo">
                        <div>
                            <h5 class="company-name">Personafic For Men</h5>
                            <p class="company-location text-muted">Tangerang, Banten, Indonesia</p>
                        </div>
                    </div>
                    <div class="company-details">
                        <p class="text-muted"><i class="mdi mdi-domain"></i> Retail</p>
                        <p><a href="#" class="text-primary"><i class="mdi mdi-briefcase-outline"></i> 2 lowongan</a></p>
                        <p class="last-active text-muted"><i class="mdi mdi-clock-outline"></i> Terakhir aktif 2 menit yang lalu</p>
                    </div>
                </div>
            </div>
            
            <!-- Example Partner 2 -->
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="company-card border rounded p-3 bg-white">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('Assets/images/blog/img-2.jpg') }}" class="company-logo me-3" alt="Company Logo">
                        <div>
                            <h5 class="company-name">PT Balkan Gourmet Group</h5>
                            <p class="company-location text-muted">Tangerang, Banten, Indonesia</p>
                        </div>
                    </div>
                    <div class="company-details">
                        <p class="text-muted"><i class="mdi mdi-domain"></i> Food & Beverages</p>
                        <p><a href="#" class="text-primary"><i class="mdi mdi-briefcase-outline"></i> 2 lowongan</a></p>
                        <p class="last-active text-muted"><i class="mdi mdi-clock-outline"></i> Terakhir aktif 2 jam yang lalu</p>
                    </div>
                </div>
            </div>

            <!-- Example Partner 3 -->
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="company-card border rounded p-3 bg-white">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('Assets/images/blog/img-3.jpg') }}" class="company-logo me-3" alt="Company Logo">
                        <div>
                            <h5 class="company-name">Jakarta Surprise Planner</h5>
                            <p class="company-location text-muted">Jakarta Pusat, DKI Jakarta, Indonesia</p>
                        </div>
                    </div>
                    <div class="company-details">
                        <p class="text-muted"><i class="mdi mdi-domain"></i> Events Services</p>
                        <p><a href="#" class="text-primary"><i class="mdi mdi-briefcase-outline"></i> 5 lowongan</a></p>
                        <p class="last-active text-muted"><i class="mdi mdi-clock-outline"></i> Terakhir aktif 6 jam yang lalu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer-utama')
@endsection
