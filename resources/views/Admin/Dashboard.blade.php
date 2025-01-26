@section('title','Jobtiva | Dashboards')
@include('Layouts.header')

<!-- Begin page -->
<div class="wrapper">

    @include('Layouts.topBar')
    @include('Layouts.leftSidebar')


    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                @section('namaPage1', 'Utama')
                @section('namaPage2', 'Dashboards')
                @include('Layouts.breadcrumb')
                <!-- end page title -->
                @php
                $totalPerusahaan = DB::table('perusahaan')->count();
                $totalLowongan = DB::table('loker')->count();
                $totalProfesi = DB::table('profesi')->count();
                $totalKategoriProfesi = DB::table('kategori_profesi')->count();
                $totalPengguna = DB::table('users')->count();
                @endphp
                <!-- Start Cards -->
                <div class="row">
                    <div class="col-xxl-3 col-sm-4">
                        <div class="card widget-flat text-bg-pink">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="ri-building-2-fill widget-icon"></i>
                                </div>
                                <h6 class="text-uppercase mt-0" title="Customers">Total Perusahaan</h6>
                                <h2 class="my-2">{{ $totalPerusahaan }}</h2>
                                <p class="mb-0">
                                    <span class="badge bg-white bg-opacity-10 me-1">Terdaftar</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-sm-4">
                        <div class="card widget-flat text-bg-purple">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="ri-flower-fill widget-icon"></i>
                                </div>
                                <h6 class="text-uppercase mt-0" title="Customers">Total Lowongan Pekerjaan</h6>
                                <h2 class="my-2">{{ $totalLowongan }}</h2>
                                <p class="mb-0">
                                    <span class="badge bg-white bg-opacity-10 me-1">Terdaftar</span>

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-sm-4">
                        <div class="card widget-flat text-bg-info">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="ri-briefcase-line widget-icon"></i>
                                </div>
                                <h6 class="text-uppercase mt-0" title="Customers">Total Profesi</h6>
                                <h2 class="my-2">{{ $totalProfesi }}</h2>
                                <p class="mb-0">
                                    <span class="badge bg-white bg-opacity-25 me-1">Terdaftar</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-sm-4">
                        <div class="card widget-flat text-bg-success">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="ri-book-read-fill widget-icon"></i>
                                </div>
                                <h6 class="text-uppercase mt-0" title="Customers">Total Kategori Profesi</h6>
                                <h2 class="my-2">{{ $totalKategoriProfesi }}</h2>
                                <p class="mb-0">
                                    <span class="badge bg-white bg-opacity-25 me-1">Terdaftar</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-sm-4">
                        <div class="card widget-flat text-bg-primary">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="ri-user-line widget-icon"></i>
                                </div>
                                <h6 class="text-uppercase mt-0" title="Customers">Total Pengguna</h6>
                                <h2 class="my-2">{{ $totalPengguna }}</h2>
                                <p class="mb-0">
                                    <span class="badge bg-white bg-opacity-10 me-1">Terdaftar</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Cards -->
            </div>
            <!-- container -->
        </div>
        <!-- content -->
        @include('Layouts.footer')
    </div>
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
</div>
<!-- END wrapper -->