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
                            <a href="#kategori-profesi" class="btn btn-primary btn-lg mx-2">Lihat Profesi</a>
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
                    <h4 class="title title-line pb-3">Kategori Profesi Populer</h4>
                </div>
            </div>
        </div>
        <div class="row">
        @foreach ($kategoriProfesi->take(5) as $kategori)
            <a href="{{ route('profesi.index', ['kategori' => strtolower(str_replace(' ', '-', $kategori->kategori_profesi))]) }}" class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="popu-category-box bg-light rounded text-center p-4">
                    <div class="popu-category-icon mb-3">
                        <i class="{{ $kategori->icon }} d-inline-block rounded-pill h3 text-primary"></i>
                    </div>
                    <div class="popu-category-content">
                        <h5 class="mb-2 text-dark title">{{ $kategori->kategori_profesi }}</h5>
                        <p class="text-success mb-0 rounded">
                            {{
                                $profesi->where('id_kategori_profesi', $kategori->id)->count()
                            }} Pekerjaan
                        </p>
                    </div>
                </div>
            </a>
        @endforeach

        </div>
    </div>
</section>

<!-- Tombol Selengkapnya -->
<div class="text-center mt-4">
     <a href="{{ route('kategori.index') }}" class="btn btn-primary">Selengkapnya</a>
        </div>
    </div>
</section>
<!-- Kategori Populer end -->

  <!-- counter start -->
  <section class="section bg-counter position-relative mt-5">
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

   <!-- Daftar Loker Populer -->
<section class="container pb-5">
    <div class="section-title text-center mb-4">
        <h4 class="title">Daftar Loker Populer</h4>
        <p class="text-muted">Temukan pekerjaan yang sesuai dengan keahlian Anda.</p>
    </div>

    <div class="row">
        @foreach ($loker as $lokerItem)
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="{{ route('loker.detail', ['id' => $lokerItem->id]) }}" class="text-decoration-none">
                    <div class="job-card border rounded p-3 bg-white">
                        <!-- Judul Pekerjaan -->
                        <h5 class="job-title mt-2">{{ $lokerItem->judul }}</h5>

                        <!-- Nama Perusahaan -->
                        <p class="company">{{ $lokerItem->nama_perusahaan }}</p>

                        <!-- Kualifikasi -->
                        <p class="qualification"><strong>Kualifikasi:</strong> {{ $lokerItem->kualifikasi }}</p>

                        <!-- Status dan Gaji -->
                        <div class="status mt-2 d-flex align-items-center">
                            @if ($lokerItem->status == 'available')
                                <span class="badge bg-success me-2">Aktif Merekrut</span>
                            @else
                                <span class="badge bg-danger me-2">Tutup</span>
                            @endif
                            <span class="badge bg-primary">{{ $lokerItem->gaji }}</span>
                        </div>

                        <!-- Link Detail -->
                        <div class="apply-link mt-3">
                            <span class="text-primary">Lihat Detail <i class="mdi mdi-chevron-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>
<!-- Daftar Loker Populer end -->
@include('Layouts.footer-utama')
@endsection