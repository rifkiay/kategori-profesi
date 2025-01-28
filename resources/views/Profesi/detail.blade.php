@section('title', 'Jobtiva | Detail Profesi')
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
                @section('namaPage2', $profesi->nama_profesi)
                @include('Layouts.breadcrumb')

                <!-- Start profile -->
                <!-- start page title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="profile-bg-picture-profesi">
                            <img src="{{ asset('storage/' . $profesi->gambar_profesi) }}" alt="Gambar Profesi" width="100%" height="auto">
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
                                                <h1>{{$profesi->nama_profesi}}</h1>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content m-0 p-4">
                                        <div class="tab-pane active" id="aboutme" role="tabpanel"
                                            aria-labelledby="home-tab" tabindex="0">
                                            <div class="profile-desk">
                                                <p class="text-muted fs-16 ">
                                                    {{-- {{$profesi->deskripsi_profesi}} --}}
                                                    {!! nl2br(e($profesi->deskripsi_profesi)) !!}
                                                </p>


                                                <table class="table table-condensed mb-0 border-top">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" style="padding-right: 10px; width: 150px;">Keterampilan</th>
                                                            <td>
                                                                <ul class="list-unstyled">
                                                                    @php
                                                                    $keterampilan = explode("\n", $profesi->keterampilan); // Memisahkan berdasarkan newline
                                                                    @endphp

                                                                    @foreach ($keterampilan as $keterampilanItem)
                                                                    <li><i class="mdi mdi-check-circle-outline text-success"></i> {{ $keterampilanItem }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Gaji</th>
                                                            <td>
                                                                Rp. {{$profesi->gaji}}

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