@extends('Layouts.navbar-utama')
@section('content')

<!-- Header Section -->
<section class="bg-half page-next-level"> 
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h4 class="text-uppercase title mb-4">Profesi</h4>
                    <ul class="page-next d-inline-block mb-0">
                        <li><a href="{{ route('home.index') }}" class="text-uppercase font-weight-bold">Home</a></li>
                        <li><span class="text-uppercase text-white font-weight-bold">Profesi</span></li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mt-5 mb-5"> <!-- Menambahkan mb-5 untuk jarak di bawah -->
    <div class="row">
        @php
            $categories = [
                ['name' => 'Teknologi Informasi', 'icon' => 'mdi-desktop-classic', 'slug' => 'teknologi-informasi'],
                ['name' => 'Kesehatan', 'icon' => 'mdi-heart-pulse', 'slug' => 'kesehatan'],
                ['name' => 'Pendidikan', 'icon' => 'mdi-school', 'slug' => 'pendidikan'],
                ['name' => 'Keuangan', 'icon' => 'mdi-cash-multiple', 'slug' => 'keuangan'],
                ['name' => 'Hukum', 'icon' => 'mdi-gavel', 'slug' => 'hukum'],
                ['name' => 'Konstruksi', 'icon' => 'mdi-office-building', 'slug' => 'konstruksi'],
                ['name' => 'Seni dan Desain', 'icon' => 'mdi-palette', 'slug' => 'seni-dan-desain'],
                ['name' => 'Pemasaran', 'icon' => 'mdi-bullhorn', 'slug' => 'pemasaran'],
                ['name' => 'Influencer', 'icon' => 'mdi-account-circle', 'slug' => 'influencer'],
                ['name' => 'Olahraga', 'icon' => 'mdi-soccer', 'slug' => 'olahraga'],
            ];
        @endphp

        @foreach($kategoriprofesi as $category)
        <a href="{{ route('profesi.index', ['kategori' => strtolower(str_replace(' ', '-', $category->kategori_profesi))]) }}" class="col-lg-3 col-md-6 mt-4 pt-2">
            <div class="popu-category-box bg-light rounded text-center p-4">
                <div class="popu-category-icon mb-3">
                    <i class="mdi {{ $category['icon'] }} d-inline-block rounded-pill h3 text-primary"></i>
                </div>
                <div class="popu-category-content">
                    <h5 class="mb-2 text-dark title">{{ $category['name'] }}</h5>
                    <p class="text-success mb-0 rounded">20 Pekerjaan</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@include('Layouts.footer-utama')
@endsection
