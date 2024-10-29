@extends('Layouts.navbar-utama')

@section('title', 'Detail Profesi')

@section('content')

@php
    $profesiNama = request()->get('profesi');
    $profesiDetail = [
        'Guru Sekolah Dasar (SD)' => [
            'deskripsi_profesi' => 'Guru SD memiliki peran penting dalam pendidikan dasar...',
            'keterampilan' => 'Pengajaran, Pemahaman Anak, Komunikasi',
            'gaji' => 'Rp6.000.000',
            'gambar_profesi' => 'guru_sd.jpg',
        ],
        'Dosen Perguruan Tinggi' => [
            'deskripsi_profesi' => 'Dosen bertanggung jawab untuk penelitian dan pengajaran...',
            'keterampilan' => 'Penelitian, Pengajaran, Analisis',
            'gaji' => 'Rp10.000.000',
            'gambar_profesi' => 'dosen.jpg',
        ],
        // Tambahkan detail profesi lainnya di sini
    ];

    $profesi = $profesiDetail[$profesiNama] ?? null;
@endphp

@if($profesi)
<!-- Detail Profesi -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('Assets/images/profesi/' . $profesi['gambar_profesi']) }}" alt="{{ $profesiNama }}" class="img-fluid rounded">
        </div>
        <div class="col-md-8">
            <h1>{{ $profesiNama }}</h1>
            <p>{{ $profesi['deskripsi_profesi'] }}</p>
            <p><strong>Keterampilan:</strong> {{ $profesi['keterampilan'] }}</p>
            <p><strong>Gaji:</strong> {{ $profesi['gaji'] }}</p>
        </div>
    </div>
</div>
@else
<div class="container mt-5">
    <h1>Profesi Tidak Ditemukan</h1>
    <p>Profesi yang Anda cari tidak tersedia.</p>
</div>
@endif
@include('Layouts.footer-utama')
@endsection
