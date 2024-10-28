@extends('Layouts.navbar-utama')

@section('title', 'Kategori Profesi')

@section('content')
@php
    $kategori = request()->get('kategori');
    $kategoriNama = ucfirst(str_replace('-', ' ', $kategori));

    // Array berisi path gambar latar di folder blog
    $backgroundImages = [
        asset('Assets/images/blog/img-1.jpg'),
        asset('Assets/images/blog/img-2.jpg'),
        asset('Assets/images/blog/img-3.jpg'),
        asset('Assets/images/blog/img-4.jpg'),
        asset('Assets/images/blog/img-5.jpg'),
        asset('Assets/images/blog/img-6.jpg'),
        asset('Assets/images/blog/img-7.jpg'),
        asset('Assets/images/blog/img-8.jpg'),
        asset('Assets/images/blog/img-9.jpg'),
        asset('Assets/images/blog/img-10.jpg'),
    ];

    // Pilih gambar secara acak dari array
    $backgroundImage = $backgroundImages[array_rand($backgroundImages)];
@endphp

<!-- Tambahkan CSS Langsung di dalam File -->
<style>
    /* Hero Section */
    .hero-section {
        position: relative;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50vh;
    }

    .hero-section .overlay {
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 20px;
    }

    .hero-section h1,
    .hero-section p {
        z-index: 1;
        color: #ffffff;
        text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.7);
        text-align: center;
    }

    /* Blog Card Styling */
    .section {
        padding: 60px 0;
    }

    .blog {
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .blog img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .blog .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 50%;
        background: rgba(0, 0, 0, 0.5);
        transition: all 0.3s ease;
    }

    .blog:hover .overlay {
        height: 100%;
    }

    .likes {
        position: absolute;
        bottom: 10px;
        right: 10px;
        z-index: 2;
    }

    .content h4 {
        font-weight: bold;
        font-size: 1.25rem;
    }

    .author {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 15px;
        background: #343a40;
        color: #ffffff;
    }

    .author p {
        margin: 0;
        font-size: 0.9rem;
    }

    .author i {
        margin-right: 5px;
    }

    .readmore {
        font-weight: bold;
        text-decoration: none;
    }

    .readmore:hover {
        text-decoration: underline;
    }
</style>

<!-- Hero Section -->
<div class="hero-section" style="background-image: url('{{ $backgroundImage }}');">
    <div class="overlay">
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
            <!-- Card Profesi 1 -->
            @foreach(range(1, 6) as $i)
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="blog position-relative overflow-hidden shadow rounded">
                    <div class="position-relative overflow-hidden">
                        <img src="{{ asset('Assets/images/blog/img-' . $i . '.jpg') }}" class="img-fluid rounded-top" alt="Profesi {{ $i }}">
                        <div class="overlay rounded-top bg-dark"></div>
                        <div class="likes">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item me-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline me-1"></i>33</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline me-1"></i>08</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content p-4">
                        <h4><a href="javascript:void(0)" class="title text-dark">Profesi {{ $i }}</a></h4>
                        <p class="text-muted">Deskripsi singkat mengenai profesi {{ $i }} di kategori {{ $kategoriNama }}. Informasi ini akan membantu memahami pekerjaan ini secara umum.</p>
                        <a href="#" class="text-dark readmore">Selengkapnya <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                    <div class="author p-3 bg-dark text-light">
                        <p class="mb-0"><i class="mdi mdi-account"></i> <a href="javascript:void(0)" class="text-light user">Penulis</a></p>
                        <p class="mb-0"><i class="mdi mdi-calendar-check"></i> 25 Sep, 2019</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('Layouts.footer-utama')
@endsection
