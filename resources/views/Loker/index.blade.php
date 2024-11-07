@section('title', 'Jobnesia | Data Lowongan Pekerjaan')
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
                @section('namaPage2', 'Data Lowongan Pekerjaan')
                @include('Layouts.breadcrumb')

                <!-- Start Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Data Lowongan Pekerjaan</h4>
                                <p class="text-muted mb-0">
                                    Berikut adalah data seluruh lowongan pekerjaan yang telah terdaftar!
                                </p>
                            </div>
                            <div class="card-body">

                                <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap">
                                    <thead>
                                        <tr>
                                            <!-- <th style="text-align: center;">ID Pekerjaan</th> -->
                                            <th style="text-align: center;">ID Kategori Profesi</th>
                                            <th style="text-align: center;">ID Perusahaan</th>
                                            <th style="text-align: center;">Nama Pekerjaan</th>
                                            <th style="text-align: center;">Nama Perusahaan</th>
                                            <th style="text-align: center; width: 40%;">Deskripsi Pekerjaan</th>
                                            <th style="text-align: center;">Gaji</th>
                                            <th style="text-align: center;">Kualifikasi</th>
                                            <th style="text-align: center;">Tanggal Posting</th>
                                            <th style="text-align: center;">Akhir Pendaftaran</th>
                                            <th style="text-align: center;">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($loker as $item)
                                        <tr>
                                            <!-- <td style="text-align: center;">{{ $item->id_loker }}</td> -->
                                            <td style="text-align: center;">{{ $item->id_kategori_profesi }}</td>
                                            <td style="text-align: center;">{{ $item->id_perusahaan }}</td>
                                            <td style="text-align: center;"> {{ $item->judul }}</td>
                                            <td style="text-align: center;">{{ $item->nama_perusahaan }}</td>
                                            <td style="text-align: center;">{{ $item->deskripsi_loker}}</td>
                                            <td style="text-align: center;">{{ $item->gaji }}</td>
                                            <td style="text-align: center;">{{ $item->kualifikasi }}</td>
                                            <td style="text-align: center;">{{ $item->tanggal_posting }}</td>
                                            <td style="text-align: center;">{{ $item->akhir_pendaftaran }}</td>
                                            <td style="text-align: center;">{{ $item->status }}</td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>

                <!-- End Table -->
            </div>
            <!-- container -->
        </div>
        <!-- content -->
        @include('Layouts.footer')
    </div>
</div>
<!-- END wrapper -->