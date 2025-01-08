@extends('Layouts.navbar-utama')

@section('title', 'Kategori Profesi')

@section('content')
@php
    // Format nama kategori dari parameter $kategori_profesi di controller
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

    // Cari kategori yang dipilih berdasarkan $profesi (ambil id_kategori_profesi pertama)
    $selectedCategory = $kategori->firstWhere('id', $profesi->first()->id_kategori_profesi ?? null);
@endphp

<!-- Hero Section -->
<div class="hero-section" style="background-image: url('{{ $backgroundImage }}'); background-size: cover; background-position: center;">
    <div class="overlay" style="background-color: rgba(0, 0, 0, 0.5); padding: 100px 0;">
        <div class="container text-center">
            <h1 class="display-4 text-white">
                Profesi Kategori: {{ $selectedCategory->kategori_profesi ?? 'Tidak Diketahui' }}
            </h1>
            <p class="text-white">
                Temukan deskripsi profesi yang tepat, pelajari kualifikasinya, dan rencanakan karier Anda dengan lebih baik.
            </p>
        </div>
    </div>
</div>

<!-- Daftar Artikel / Profesi -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <!-- Loop untuk menampilkan daftar profesi sebagai kartu -->
            @foreach($profesi as $item)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm rounded-lg overflow-hidden h-100">
                    <!-- Center the image using d-block mx-auto and ensuring good aspect ratio -->
                    <img src="{{ asset('Assets/images/' . $item->gambar_profesi) }}" class="card-img-top d-block mx-auto" alt="Profesi {{ $item->nama_profesi }}" style="max-height: 200px; object-fit: cover;">
                    
                    <div class="card-body">
                        <h5 class="card-title text-dark">
                            <a href="{{ route('profesi.detail', ['id' => $item->id]) }}" class="text-dark text-decoration-none">{{ $item->nama_profesi }}</a>
                        </h5>
                        <p class="card-text text-muted">{{ Str::limit($item->deskripsi_profesi, 100) }}</p>
                        <a href="{{ route('profesi.detail', ['id' => $item->id]) }}" class="btn btn-primary">Selengkapnya <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                    <div class="card-footer bg-light text-muted">
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
