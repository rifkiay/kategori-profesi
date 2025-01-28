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

<div class="container mt-5 mb-5">
    <div class="row">
        @foreach ($kategoriprofesi as $kategori) 
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

@include('Layouts.footer-utama')
@endsection
