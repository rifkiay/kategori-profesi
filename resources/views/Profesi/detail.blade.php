@section('title', 'Jobnesia | Detail Profesi')
@include('Layouts.header')

<!-- Begin page -->
<div class="wrapper">
    @include('Layouts.topBar')
    @include('Layouts.leftSidebar')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @section('namaPage1', 'Profesi')
                @section('namaPage2', 'Detail Profesi')
                @include('Layouts.breadcrumb')

                <!-- Start profile -->
                <!-- start page title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="profile-bg-picture">
                            <img src="{{ asset('Assets/images/bg-counters.jpg') }}" alt="Gambar Profesi" width="100%" height="auto">
                            <span class="picture-bg-overlay">

                            </span>
                            <!-- overlay -->
                        </div>
                        <!-- meta -->
                        <div class="profile-user-box">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="profile-user-img">
                                        @if($profesi->gambar_profesi)
                                        <img src="{{ asset('storage/' . $profesi->gambar_profesi) }}" alt="Gambar Profesi" width="100%" height="300" class="avatar-lg rounded-circle">
                                        @else
                                        <span>Gambar tidak tersedia</span>
                                        @endif
                                    </div>
                                    <div class="">
                                        <h4 class="mt-4 fs-17 ellipsis">{{ $profesi->nama_profesi }}</h4>
                                        <h5>Keterampilan:
                                            <p class="font-13">{{$profesi->keterampilan}}</p>
                                        </h5>

                                        <p class="text-muted mb-0 text-lg"><small> <span class="badge bg-success bg-opacity-13 p-2">
                                                   Rp. {{$profesi->gaji}}
                                                </span></small></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex justify-content-end align-items-center gap-2">
                                        <a href="{{ route('profesi.edit', $profesi->id) }}" class="btn btn-soft-info">
                                            <i class="ri-pencil-fill align-text-bottom me-1 fs-16 lh-1"></i>
                                            Edit Profesi
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ meta -->
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
                                                aria-controls="home" aria-selected="true" href="#aboutme">Deskripsi Profesi</a>
                                        </li>



                                    </ul>

                                    <div class="tab-content m-0 p-4">
                                        <div class="tab-pane active" id="aboutme" role="tabpanel"
                                            aria-labelledby="home-tab" tabindex="0">
                                            <div class="profile-desk">

                                                <p class="text-muted fs-16">
                                                    {{$profesi->deskripsi_profesi}}
                                                </p>


                                                <table class="table table-condensed mb-0 border-top">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Perusahaan</th>
                                                            <td>
                                                                <a href="#" class="ng-binding">
                                                                    JayaAtmaja
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Email</th>
                                                            <td>
                                                                <a href="" class="ng-binding">
                                                                    HRDRec@example.com
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Icon</th>
                                                            <td class="ng-binding"> <i class="mdi mdi-heart-pulse d-inline-block rounded-pill h3 text-primary"></i></td>
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