@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <!-- Header Pekerjaan -->
            <div class="d-flex align-items-center mb-3">
                <img src="https://via.placeholder.com/50" alt="Company Logo" class="me-3">
                <div>
                    <h4 class="mb-0">{{ $pekerjaan['title'] }}</h4>
                    <p class="text-muted mb-0">{{ $pekerjaan['company'] }} - {{ $pekerjaan['location'] }}</p>
                </div>
            </div>
            
            <!-- Informasi Pekerjaan -->
            <p><strong>Gaji:</strong> {{ $pekerjaan['salary'] }}</p>
            <p><strong>Jenis Pekerjaan:</strong> {{ $pekerjaan['type'] }}</p>
            <p><strong>Waktu Kerja:</strong> {{ $pekerjaan['work_time'] }}</p>
            <p><strong>Kualifikasi:</strong> {{ $pekerjaan['qualification'] }}</p>
            <p><strong>Pengalaman:</strong> {{ $pekerjaan['experience'] }}</p>
            
            <div class="text-muted">
                <small>Diposting {{ $pekerjaan['posted'] }} | Diperbarui {{ $pekerjaan['updated'] }}</small>
            </div>

            <!-- Tombol Aksi -->
            <div class="d-flex mt-4">
                <button class="btn btn-primary me-2">Lamar Cepat</button>
                <button class="btn btn-outline-secondary me-2">Tandai</button>
                <button class="btn btn-outline-secondary">Bagikan</button>
            </div>

            <!-- Persyaratan -->
            <hr>
            <h5>Persyaratan</h5>
            <div class="mb-3">
                <span class="badge bg-secondary">Kerja di kantor</span>
                <span class="badge bg-secondary">{{ $pekerjaan['experience'] }}</span>
                <span class="badge bg-secondary">{{ $pekerjaan['qualification'] }}</span>
                <span class="badge bg-secondary">22-35 tahun</span>
            </div>

            <!-- Skills -->
            <h5>Skills</h5>
            <div class="mb-3">
                @foreach ($pekerjaan['skills'] as $skill)
                    <span class="badge bg-secondary">{{ $skill }}</span>
                @endforeach
            </div>

            <!-- Informasi Pengelola -->
            <h5>Loker ini dikelola oleh</h5>
            <div class="d-flex align-items-center">
                <img src="https://via.placeholder.com/40" alt="Manager" class="rounded-circle me-2">
                <div>
                    <strong>{{ $pekerjaan['manager']['name'] }}</strong><br>
                    <small>{{ $pekerjaan['manager']['status'] }}</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
