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
                <p class="about-description" style="line-height: 1.8; text-align: justify;">
                    Selamat datang di platform kami! Kami hadir untuk menyediakan informasi penting tentang berbagai profesi, mulai dari deskripsi pekerjaan hingga keterampilan yang dibutuhkan. Dengan platform ini, kamu bisa mendapatkan gambaran lebih jelas tentang pilihan karier yang tersedia, sehingga dapat membuat keputusan yang lebih terarah.
                </p>
                <p style="line-height: 1.8; text-align: justify;">
                    Kami ingin menjadi teman perjalananmu dalam merancang masa depan. Semua informasi yang kami sajikan dirancang sederhana, namun tetap komprehensif, agar mudah dipahami oleh siapa saja. Dengan panduan ini, kami berharap kamu dapat memilih jalur karier yang paling sesuai dengan kebutuhan dan tujuan hidupmu.
                </p>
                <p style="line-height: 1.8; text-align: justify;">
                    Gunakan platform ini sebagai langkah awal untuk mengeksplorasi peluang baru, mendapatkan wawasan tentang dunia kerja, dan mempersiapkan masa depan yang lebih baik. Bersama kami, rencanakan masa depanmu dengan percaya diri!
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Platform Section -->
<div class="container my-5">
    <div class="text-center">
        <h2 class="mb-4">Tentang Platform Kami</h2>
    </div>

    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="icon mb-3">
                <i class="mdi mdi-information-outline text-primary" style="font-size: 50px;"></i>
            </div>
            <h5>Informasi Lengkap</h5>
            <p>Kami menyediakan informasi mendalam mengenai berbagai profesi, membantu Anda memahami lebih baik apa yang diperlukan untuk sukses di dunia kerja.</p>
        </div>

        <div class="col-md-4 mb-4">
            <div class="icon mb-3">
                <i class="mdi mdi-clipboard-check-outline text-primary" style="font-size: 50px;"></i>
            </div>
            <h5>Deskripsi Tugas</h5>
            <p>Pelajari detail tanggung jawab dan keterampilan yang dibutuhkan untuk setiap profesi, sehingga Anda dapat mempersiapkan diri dengan baik.</p>
        </div>

        <div class="col-md-4 mb-4">
            <div class="icon mb-3">
                <i class="mdi mdi-chart-line text-primary" style="font-size: 50px;"></i>
            </div>
            <h5>Wawasan Karier</h5>
            <p>Kami memberikan panduan tentang jalur karier dan peluang pengembangan diri, mendukung Anda dalam merencanakan masa depan yang lebih cerah.</p>
        </div>
    </div>
</div>

<!-- Team Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h1 class="title">Tim Kami</h1>
                    <p class="sub-title">Tim yang berdedikasi dan berpengalaman</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row mb-n6">
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="single-team-member text-center mb-6">
                    <!-- Team Thumb Start -->
                    <div class="team-thumb">
                        <!-- Team Member Image Start -->
                        <img class="fit-image" src="{{ asset('assets/images/team/Rifki.png') }}"
                            alt="Team Image" />
                        <!-- Team Member Image End -->

                        <!-- Team Social Start -->
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                        <!-- Team Social End -->
                    </div>
                    <!-- Team Thumb End -->

                    <!-- Team Content Start -->
                    <div class="team-content">
                        <h6 class="team-member-name">Rifki Ainul Yaqin</h6>
                        <p>HACKER</p>
                    </div>
                    <!-- Team Content End -->
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                <div class="single-team-member text-center mb-6">
                    <!-- Team Thumb Start -->
                    <div class="team-thumb">
                        <!-- Team Member Image Start -->
                        <img class="fit-image" src="{{ asset('assets/images/team/Wilda.png') }}" alt="Team Image" />
                        <!-- Team Member Image End -->

                        <!-- Team Social Start -->
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                        <!-- Team Social End -->
                    </div>
                    <!-- Team Thumb End -->

                    <!-- Team Content Start -->
                    <div class="team-content">
                        <h6 class="team-member-name">Wilda Agustina</h6>
                        <p>HIPSTER</p>
                    </div>
                    <!-- Team Content End -->
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                <div class="single-team-member text-center mb-6">
                    <!-- Team Thumb Start -->
                    <div class="team-thumb">
                        <!-- Team Member Image Start -->
                        <img class="fit-image" src="{{ asset('assets/images/team/Azilma.png') }}"
                            alt="Team Image" />
                        <!-- Team Member Image End -->

                        <!-- Team Social Start -->
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                        <!-- Team Social End -->
                    </div>
                    <!-- Team Thumb End -->

                    <!-- Team Content Start -->
                    <div class="team-content">
                        <h6 class="team-member-name">Azilma Nuzul Yasinta</h6>
                        <p>HACKER</p>
                    </div>
                    <!-- Team Content End -->
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="500">
                <div class="single-team-member text-center mb-6">
                    <!-- Team Thumb Start -->
                    <div class="team-thumb">
                        <!-- Team Member Image Start -->
                        <img class="fit-image" src="{{ asset('assets/images/team/Reddis.png') }}" alt="Team Image" />
                        <!-- Team Member Image End -->

                        <!-- Team Social Start -->
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                        <!-- Team Social End -->
                    </div>
                    <!-- Team Thumb End -->

                    <!-- Team Content Start -->
                    <div class="team-content">
                        <h6 class="team-member-name">Reddis Angel</h6>
                        <p>HIPSTER</p>
                    </div>
                    <!-- Team Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Section End -->

@include('layouts.footer-utama')
@endsection
