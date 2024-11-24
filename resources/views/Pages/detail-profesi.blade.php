@extends('Layouts.navbar-utama')

@section('title', 'Detail Profesi')

@section('content')
    <!-- Hero Section -->
    <section class="bg-half page-next-level" style="background: url asset('Assets/images/blog/img-1.jpg') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Arsitektur</h4>
                        <p class="text-white-50">Menggabungkan seni, sains, dan teknologi untuk menciptakan ruang yang fungsional dan estetis.</p>
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
                        Profesi Arsitektur bertanggung jawab untuk merancang bangunan yang memenuhi kebutuhan estetika dan fungsionalitas. Para arsitek bekerja sama dengan klien dan tim konstruksi untuk memastikan bahwa desain mereka dapat diwujudkan dengan efisien dan aman.
                    </p>

                    <!-- Keterampilan yang Diperlukan -->
                    <h3 class="text-primary font-weight-bold mt-5 mb-3"><i class="mdi mdi-wrench-outline"></i> Keterampilan yang Diperlukan</h3>
                    <ul class="list-unstyled pl-3">
                        <li><i class="mdi mdi-check-circle-outline text-success"></i> Mahir menggunakan AutoCAD dan SketchUp</li>
                        <li><i class="mdi mdi-check-circle-outline text-success"></i> Keterampilan analitis dan kemampuan problem-solving yang kuat</li>
                        <li><i class="mdi mdi-check-circle-outline text-success"></i> Kreativitas dalam desain dan perencanaan</li>
                    </ul>

                    <!-- Gaji Rata-Rata -->
                    <h3 class="text-primary font-weight-bold mt-5 mb-3"><i class="mdi mdi-currency-usd-circle-outline"></i> Gaji Rata-Rata</h3>
                    <p class="font-italic" style="font-size: 1.2em; color: #333;">Rp. 10.000.000 per bulan</p>

                    <!-- Tanggung Jawab Pekerjaan -->
                    <h3 class="text-primary font-weight-bold mt-5 mb-3"><i class="mdi mdi-clipboard-check-outline"></i> Tanggung Jawab Pekerjaan</h3>
                    <p class="text-justify">
                        Arsitek memiliki tanggung jawab besar dalam membuat rancangan bangunan yang bukan hanya menarik secara visual tetapi juga aman dan efisien. Mereka bekerja dengan berbagai pihak, termasuk klien, insinyur, dan kontraktor, untuk mewujudkan proyek sesuai standar yang diinginkan.
                    </p>
                    
                    <!-- Prospek Karir -->
                    <h3 class="text-primary font-weight-bold mt-5 mb-3"><i class="mdi mdi-trending-up"></i> Prospek Karir</h3>
                    <p class="text-justify">
                        Seiring dengan pertumbuhan sektor pembangunan dan renovasi, profesi arsitek memiliki prospek yang menjanjikan di masa depan. Arsitek dapat berkembang menjadi konsultan, manajer proyek, atau bahkan mendirikan firma arsitektur sendiri.
                    </p>
                    
                </article>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    @include('Layouts.footer-utama')
@endsection
