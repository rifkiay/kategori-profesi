@extends('Layouts.navbar-utama')

@section('title', 'Detail Profesi')

@section('content')
    
    <!-- Hero Section -->
    @if ($profesi->isNotEmpty())
        @php $profesiItem = $profesi->first(); @endphp
        <section class="hero-section-detail position-relative">
        <img src="{{ asset('storage/' . $profesiItem->gambar_profesi) }}" 
            alt="{{ $profesiItem->nama_profesi }}" 
            class="hero-image-detail">
            <div class="hero-dark-overlay"></div>
            <div class="hero-overlay">
            <h1 class="hero-title">{{ $profesiItem->nama_profesi }}</h1>
            </div>
        </section>
        <!-- Blog Content -->
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <article class="mb-5">
                    <!-- Deskripsi Profesi -->
                    <h3 class="text-primary font-weight-bold mb-3">
                        <i class="mdi mdi-briefcase-check-outline"></i> Deskripsi Profesi</h3>
                    <p class="text-justify deskripsi-text">
                        {!! nl2br(e($profesiItem->deskripsi_profesi)) !!}
                    </p>

                    <!-- Keterampilan yang Diperlukan -->
                    <h3 class="text-primary font-weight-bold mt-5 mb-3">
                        <i class="mdi mdi-wrench-outline"></i> Keterampilan yang Diperlukan</h3>
                    <ul class="list-unstyled pl-3">
                        @php
                            $keterampilan = explode("\n", $profesiItem->keterampilan);
                        @endphp
                        @foreach ($keterampilan as $keterampilanItem)
                            <li>
                                <i class="mdi mdi-check-circle-outline text-success"></i> {{ $keterampilanItem }}
                            </li>
                        @endforeach
                    </ul>

                    <!-- Gaji Rata-Rata -->
                    <h3 class="text-primary font-weight-bold mt-5 mb-3"><i class="mdi mdi-currency-usd-circle-outline"></i> Gaji Rata-Rata</h3>
                                        <p class="font-italic" style="font-size: 1.2em; color: #333;">Rp. {{$profesiItem->gaji}} per bulan</p>     
                                        </article>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="container my-5">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10 text-center">
                                        <h3>Data tidak ditemukan.</h3>
                                    </div>
                                </div>
                            </div>
                        @endif
    <!-- Footer Section -->
    @include('Layouts.footer-utama')
@endsection
