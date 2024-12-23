@extends('Layouts.navbar-utama')

@section('title', 'Kategori Profesi')

@section('content')
@php
    $kategoriNama = ucfirst(str_replace('-', ' ', $kategori));

    // Array berisi path gambar latar di folder blog
    $backgroundImages = [
        asset('assets/images/blog/img-1.jpg'),
        asset('assets/images/blog/img-2.jpg'),
        asset('assets/images/blog/img-3.jpg'),
        asset('assets/images/blog/img-4.jpg'),
        asset('assets/images/blog/img-5.jpg'),
        asset('assets/images/blog/img-6.jpg'),
        asset('assets/images/blog/img-7.jpg'),
        asset('assets/images/blog/img-8.jpg'),
        asset('assets/images/blog/img-9.jpg'),
        asset('assets/images/blog/img-10.jpg'),
    ];

    // Pilih gambar secara acak dari array
    $backgroundImage = $backgroundImages[array_rand($backgroundImages)];
@endphp

<!-- Hero Section -->
<div class="hero-section" style="background-image: url('{{ $backgroundImage }}'); background-size: cover; background-position: center;">
    <div class="overlay" style="background-color: rgba(0, 0, 0, 0.5); padding: 100px 0;">
        <div class="container text-center">
            <h1 class="display-4 text-white">Profesi Kategori: {{ $kategoriNama }}</h1>
            <p class="text-white">Temukan deskripsi profesi yang tepat, pelajari kualifikasinya, dan rencanakan karier Anda dengan lebih baik.</p>
        </div>
    </div>
</div>

<!-- Daftar Artikel / Profesi -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <!-- Loop untuk menampilkan daftar profesi sebagai kartu -->
            @foreach($profesi as $item)
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="blog position-relative overflow-hidden shadow rounded">
                    <div class="position-relative overflow-hidden">
                        <!-- Gambar untuk tiap kartu profesi -->
                        <img src="{{ asset('assets/images/blog/' . $item->gambar_profesi) }}" class="img-fluid rounded-top" alt="Profesi {{ $item->nama_profesi }}">
                        <div class="overlay rounded-top bg-dark"></div>
                        <div class="likes">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item me-2">
                                    <a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline me-1"></i>33</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline me-1"></i>08</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content p-4">
                        <h4><a href="{{ route('profesi.detail', ['id' => $item->id]) }}" class="title text-dark">{{ $item->nama_profesi }}</a></h4>
                        <p class="text-muted">{{ Str::limit($item->deskripsi_profesi, 100) }}</p>
                        <a href="{{ route('profesi.detail', ['id' => $item->id]) }}" class="text-dark readmore">Selengkapnya <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                    <div class="author p-3 bg-dark text-light">
                        <p class="mb-0"><i class="mdi mdi-account"></i> <a href="javascript:void(0)" class="text-light user">Penulis</a></p>
                        <p class="mb-0"><i class="mdi mdi-calendar-check"></i> {{ $item->created_at->format('d M, Y') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('Layouts.footer-utama')
@endsection
