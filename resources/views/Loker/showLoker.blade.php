@section('title', 'Perusahaan | Data Pekerjaan')
@include('Layouts.header')
<!-- Begin page -->
<div class="wrapper">
    @include('Layouts.topBar')
    @include('Layouts.leftSidebar')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @section('namaPage1', 'Pekerjaan')
                @section('namaPage2', 'Data Pekerjaan')
                @include('Layouts.breadcrumb')

                <!-- Start Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Data Pekerjaan</h4>
                                <p class="text-muted mb-0">
                                    Berikut adalah data seluruh lowongan pekerjaan yang telah terdaftar!
                                </p>
                            </div>
                            <div class="card-body">

                                <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">ID Pekerjaan</th>
                                            <th style="text-align: center;">ID Kategori Profesi</th>
                                            <th style="text-align: center;">ID Perusahaan</th>
                                            <th style="text-align: center;">Nama Pekerjaan</th>
                                            <th style="text-align: center;">Nama Perusahaan</th>
                                            <th style="text-align: center; width: 40%;">Deskripsi Pekerjaan</th>
                                            <th style="text-align: center;">Gaji</th>
                                            <th style="text-align: center;">Kualifikasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align: center;">1</td>
                                            <td style="text-align: center;">1</td>
                                            <td style="text-align: center;">1</td>
                                            <td style="text-align: center;">Arsitek Junior</td>
                                            <td style="text-align: center;">Nicon</td>
                                            <td style="text-align: justify;">Merancang bangunan dan struktur, memadukan elemen estetika dan fungsionalitas. Mereka bekerja sama dengan klien dan tim konstruksi untuk menghasilkan desain yang sesuai kebutuhan.</td>
                                            <td style="text-align: center;">Rp. 5.000.000</td>
                                            <td style="text-align: center;">Gelar S1 Arsitektur</td>
                                        </tr>


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