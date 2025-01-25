@extends('Layouts.navbar-utama')

@section('title', 'Detail Profesi')

@section('content')
    
    <!-- Hero Section -->
    @foreach ($profesi as $profesis)
    <section class="bg-half page-next-level" style="background: url('{{ asset('storage/' . $profesis->gambar_profesi) }}') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">{{$profesis->nama_profesi}}</h4>
                        {{-- <p class="text-white-50">Menggabungkan seni, sains, dan teknologi untuk menciptakan ruang yang fungsional dan estetis.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container my-3" style="padding-top: 50px;">
        <!-- Blog Content -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <article class="mb-5">
                    <!-- Deskripsi Profesi -->
                    <h3 class="text-primary font-weight-bold mb-3"><i class="mdi mdi-briefcase-check-outline"></i> Deskripsi Profesi</h3>
                    <p class="text-justify">
                        {{-- {{$profesis->deskripsi_profesi}} --}}
                        {!! nl2br(e($profesis->deskripsi_profesi)) !!}
                    </p>

                    <!-- Keterampilan yang Diperlukan -->
                    <h3 class="text-primary font-weight-bold mt-5 mb-3"><i class="mdi mdi-wrench-outline"></i> Keterampilan yang Diperlukan</h3>
                    <ul class="list-unstyled pl-3">
                        @php
                            $keterampilan = explode("\n", $profesis->keterampilan); // Memisahkan berdasarkan newline
                        @endphp
                    
                        @foreach ($keterampilan as $keterampilanItem)
                            <li><i class="mdi mdi-check-circle-outline text-success"></i> {{ $keterampilanItem }}</li>
                        @endforeach
                    </ul>

                    <!-- Gaji Rata-Rata -->
                    <h3 class="text-primary font-weight-bold mt-5 mb-3"><i class="mdi mdi-currency-usd-circle-outline"></i> Gaji Rata-Rata</h3>
                    <p class="font-italic" style="font-size: 1.2em; color: #333;">Rp. {{$profesis->gaji}} per bulan</p>                   
                </article>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Footer Section -->
    @include('Layouts.footer-utama')
@endsection
