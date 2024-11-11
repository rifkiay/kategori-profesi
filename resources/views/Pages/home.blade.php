@extends('Layouts.navbar-utama')
@section('content')
<!-- Start Home -->
<section class="bg-home" style="background: url('{{ asset("assets/images/bg-home.jpg") }}') center center; background-size: cover;">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="title-heading text-center text-white">
                            <h6 class="small-title text-uppercase text-light mb-3">Temukan deskripsi profesi yang tepat, pelajari kualifikasinya, dan rencanakan karier Anda dengan lebih baik.</h6>
                            <h1 class="heading fw-bold mb-4">Cara Mudah untuk Memahami Beragam Profesi</h1>
                        </div>
                    </div>
                </div>
                <div class="home-form-position">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="home-registration-form p-4 mb-3">
                                <form class="registration-form">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="registration-form-box">
                                                <i class="fa fa-briefcase"></i>
                                                <input type="text" class="form-control rounded registration-input-box" placeholder="Kata kunci profesi...">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="registration-form-box select-box-icon">
                                                <i class="fa fa-list-alt"></i>
                                                <input type="text" class="form-control rounded registration-input-box" placeholder="Kategori...">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="registration-form-box">
                                                <input type="submit" class="submitBnt btn btn-primary btn-block" value="Cari">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home -->

    <!-- Kategori Populer -->
    <section id="kategori-profesi" class="mt-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-3 pb-2">
                        <h4 class="title title-line pb-3">Kategori Profesi</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Tampilkan hanya 6 kategori -->
                <a href="detail-profesi?kategori=teknologi-informasi" class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="popu-category-box bg-light rounded text-center p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-desktop-classic d-inline-block rounded-pill h3 text-primary"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="mb-2 text-dark title">Teknologi Informasi</h5>
                            <p class="text-success mb-0 rounded">20 Pekerjaan</p>
                        </div>
                    </div>
                </a>

                <a href="detail-profesi?kategori=kesehatan" class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="popu-category-box bg-light rounded text-center p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-heart-pulse d-inline-block rounded-pill h3 text-primary"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="mb-2 text-dark title">Kesehatan</h5>
                            <p class="text-success mb-0 rounded">20 Pekerjaan</p>
                        </div>
                    </div>
                </a>

                <a href="detail-profesi?kategori=pendidikan" class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="popu-category-box bg-light rounded text-center p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-school d-inline-block rounded-pill h3 text-primary"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="mb-2 text-dark title">Pendidikan</h5>
                            <p class="text-success mb-0 rounded">20 Pekerjaan</p>
                        </div>
                    </div>
                </a>

                <a href="detail-profesi?kategori=keuangan" class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="popu-category-box bg-light rounded text-center p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-cash-multiple d-inline-block rounded-pill h3 text-primary"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="mb-2 text-dark title">Keuangan</h5>
                            <p class="text-success mb-0 rounded">20 Pekerjaan</p>
                        </div>
                    </div>
                </a>

                <a href="detail-profesi?kategori=hukum" class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="popu-category-box bg-light rounded text-center p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-gavel d-inline-block rounded-pill h3 text-primary"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="mb-2 text-dark title">Hukum</h5>
                            <p class="text-success mb-0 rounded">20 Pekerjaan</p>
                        </div>
                    </div>
                </a>

                <a href="detail-profesi?kategori=konstruksi" class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="popu-category-box bg-light rounded text-center p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-office-building d-inline-block rounded-pill h3 text-primary"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="mb-2 text-dark title">Konstruksi</h5>
                            <p class="text-success mb-0 rounded">20 Pekerjaan</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Tombol Selengkapnya -->
            <div class="text-center mt-4">
                <a href="{{ route('profesi') }}" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
    </section>
    <!-- Kategori Populer end -->

  <!-- counter start -->
  <section class="section bg-counter position-relative mt-5" style="background: url('/assets/images/bg-counters.jpg') center center; background-size: cover; margin-bottom: 50px;">
        <div class="bg-overlay bg-overlay-gradient"></div>
         <div class="container mb-5">
            <div class="row" id="counter">
                <div class="col-md-3 col-6">
                    <div class="home-counter pt-4 pb-4">
                        <div class="float-start counter-icon me-3">
                            <i class="mdi mdi-bank h1 text-white"></i>
                        </div>
                        <div class="counter-content overflow-hidden">
                            <h1 class="counter-value text-white mb-1" data-count="120">10</h1>
                            <p class="counter-name text-white text-uppercase mb-0">Companies</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="home-counter pt-4 pb-4">
                        <div class="float-start counter-icon me-3">
                            <i class="mdi mdi-file-document-box h1 text-white"></i>
                        </div>
                        <div class="counter-content overflow-hidden">
                            <h1 class="counter-value text-white mb-1" data-count="480">80</h1>
                            <p class="counter-name text-white text-uppercase mb-0">Applications</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="home-counter pt-4 pb-4">
                        <div class="float-start counter-icon me-3">
                            <i class="mdi mdi-calendar-multiple-check h1 text-white"></i>
                        </div>
                        <div class="counter-content overflow-hidden">
                            <h1 class="counter-value text-white mb-1" data-count="120">10</h1>
                            <p class="counter-name text-white text-uppercase mb-0">Job Posted</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="home-counter pt-4 pb-4">
                        <div class="float-start counter-icon me-3">
                            <i class="mdi mdi-account-multiple-plus h1 text-white"></i>
                        </div>
                        <div class="counter-content overflow-hidden">
                            <h1 class="counter-value text-white mb-1" data-count="200">10</h1>
                            <p class="counter-name text-white text-uppercase mb-0">Member</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- counter end -->

<!-- Daftar Pekerjaan Populer -->
<section class="container pb-5">
    <!-- Judul Utama -->
    <div class="section-title text-center mb-4">
        <h4 class="title">Daftar Pekerjaan Populer</h4>
        <p class="text-muted">Temukan pekerjaan yang sesuai dengan keahlian Anda.</p>
    </div>
    <!-- Baris untuk menampilkan kartu pekerjaan -->
    <div class="row">
        <!-- Kartu Pekerjaan 1 -->
        <div class="col-lg-3 col-md-6 mt-4 pt-2">
            <div class="job-card border rounded p-3 bg-white">
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
                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <!-- Kartu Pekerjaan 2 -->
        <div class="col-lg-3 col-md-6 mt-4 pt-2">
            <div class="job-card border rounded p-3 bg-white">
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
                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <!-- Kartu Pekerjaan 3 -->
        <div class="col-lg-3 col-md-6 mt-4 pt-2">
            <div class="job-card border rounded p-3 bg-white">
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
                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <!-- Kartu Pekerjaan 4 -->
        <div class="col-lg-3 col-md-6 mt-4 pt-2">
            <div class="job-card border rounded p-3 bg-white">
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
                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Button untuk 'Lihat Selengkapnya' -->
    <div class="text-center mt-4">
    <a href="{{ route('loker') }}" class="btn btn-primary">Selengkapnya</a>
    </div>
</section>
<!-- Daftar Pekerjaan Populer end -->

    @include('Layouts.footer-utama')
    @endsection
