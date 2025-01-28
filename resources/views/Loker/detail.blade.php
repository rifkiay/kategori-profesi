@section('title', 'Jobtiva | Detail Loker')
@include('Layouts.header')

<!-- Begin page -->
<div class="wrapper">
    @include('Layouts.topBar')
    @include('Layouts.leftSidebar')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @section('namaPage1', 'Lowongan Pekerjaan')
                @section('namaPage2', $loker->judul)
                @include('Layouts.breadcrumb')

                <!-- Start profile -->
                <!-- start page title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="profile-bg-picture-profesi">
                            <img src="{{ asset('assets/images/2.png') }}" width="100%" height="auto">
                            <span class="picture-bg-overlay">
                            </span>
                        </div>
                    </div>
                </div>

                <!-- end row -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card p-0">
                            <div class="card-body p-0">
                                <div class="profile-content">
                                    <ul class="nav nav-underline nav-justified gap-0">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                                data-bs-target="#aboutme" type="button" role="tab"
                                                aria-controls="home" aria-selected="true" href="#aboutme">
                                                <div class="row">
                                                    <div class="col-sm-12 text-center">
                                                        <div class="profile-avatar">
                                                            <img src="{{ asset('storage/' . $loker->perusahaan->logo_perusahaan) }}"
                                                                alt="Logo Perusahaan"
                                                                class="rounded-circle avatar-lg "
                                                                style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #adb5bd;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1>{{$loker->judul}}</h1>
                                                <h4 class="text-muted">{{$loker->nama_perusahaan}}</h4>
                                                <p class="text-muted mb-2"><i class="mdi mdi-map-marker"></i> {{ $loker->lokasi ?? 'Lokasi tidak tersedia' }}</p>
                                                <!-- Status -->
                                                <span class="badge {{ $loker->status == 'available' ? 'bg-success' : 'bg-danger' }} p-2 text-white">
                                                    {{ $loker->status == 'available' ? 'Aktif Merekrut' : 'Tutup' }}
                                                </span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content m-0 p-4">
                                        <div class="tab-pane active" id="aboutme" role="tabpanel"
                                            aria-labelledby="home-tab" tabindex="0">
                                            <div class="profile-desk">
                                                <h3>Deskripsi Pekerjaan</h3>
                                                <p class="text-muted fs-16 ">
                                                    {{$loker->deskripsi_loker}}
                                                </p>
                                                <table class="table table-condensed mb-0 border-top">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" style="padding-right: 10px; width: 150px;">Kualifikasi</th>
                                                            <td>
                                                                <i class="ri-graduation-cap-fill"></i>
                                                                {{$loker->kualifikasi}}
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Gaji</th>
                                                            <td>
                                                                {{$loker->gaji}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tanggal Posting</th>
                                                            <td>
                                                                {{$loker->tanggal_posting}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Akhir Pendaftaran</th>
                                                            <td>
                                                                {{$loker->akhir_pendaftaran}}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> <!-- end profile-desk -->
                                        </div> <!-- about-me -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
            </div>
            <!-- container -->
        </div>
        <!-- content -->
        @include('Layouts.footer')
    </div>
</div>
<!-- END wrapper -->