@extends('Layouts.navbar-utama')
@section('title', 'Detail Loker')

@section('content')
<!-- Header Section -->
<section class="bg-half page-next-level">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h4 class="text-uppercase title mb-4">Detail Loker</h4>
                    <ul class="page-next d-inline-block mb-0">
                        <li><a href="{{ url('/') }}" class="text-uppercase font-weight-bold">Beranda</a></li>
                        <li><span class="text-uppercase text-white font-weight-bold">Detail Loker</span></li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Job Detail Section -->
<section class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Job Detail Card -->
            <div class="card shadow-lg border-0 rounded p-4">
                <div class="text-center">
                    <!-- Gambar Perusahaan -->
                    <img src="{{ asset('storage/' . $lokerItem->perusahaan->logo_perusahaan) }}" class="img-fluid rounded-circle company-logo" alt="Company Logo">
                </div>
                <div class="text-center">
                    <!-- Job Title -->
                    <h3 class="job-title text-dark mb-3">{{ $lokerItem->judul }}</h3>
                    <p class="company-name text-muted mb-2"><strong>{{ $lokerItem->nama_perusahaan }}</strong></p>
                    <p class="text-muted mb-3"><i class="mdi mdi-map-marker"></i> {{ $lokerItem->lokasi ?? 'Lokasi tidak tersedia' }}</p>

                    <!-- Status -->
                    <span class="badge {{ $lokerItem->status == 'available' ? 'bg-success' : 'bg-danger' }} p-2 text-white">
                        {{ $lokerItem->status == 'available' ? 'Aktif Merekrut' : 'Tutup' }}
                    </span>
                </div>

                <hr class="my-4">

                <!-- Deskripsi Pekerjaan -->
                <div class="mb-4">
                    <h5>Deskripsi Pekerjaan:</h5>
                    <p>{{ $lokerItem->deskripsi_loker }}</p>
                </div>

                <!-- Kualifikasi -->
                <div class="mb-4">
                    <h5>Kualifikasi:</h5>
                    <p>{{ $lokerItem->kualifikasi }}</p>
                </div>

                <!-- Gaji -->
                <div class="mb-4">
                    <h5>Gaji:</h5>
                    <p class="text-success font-weight-bold">{{ $lokerItem->gaji }}</p>
                </div>

                <!-- Tanggal Posting dan Pendaftaran -->
                <div class="mb-4">
                    <p><strong>Tanggal Posting:</strong> {{ \Carbon\Carbon::parse($lokerItem->tanggal_posting)->format('d M Y') }}</p>
                    <p><strong>Akhir Pendaftaran:</strong> {{ \Carbon\Carbon::parse($lokerItem->akhir_pendaftaran)->format('d M Y') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer-utama')
@endsection
