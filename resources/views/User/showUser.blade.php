@section('title', 'Perusahaan | Data Pengguna')
@include('Layouts.header')
<!-- Begin page -->
<div class="wrapper">
    @include('Layouts.topBar')
    @include('Layouts.leftSidebar')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @section('namaPage1', 'Pengguna')
                @section('namaPage2', 'Data Pengguna')
                @include('Layouts.breadcrumb')

                <!-- Start Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Data Pengguna</h4>
                                <p class="text-muted mb-0">
                                    Berikut adalah data seluruh pengguna yang telah terdaftar!
                                </p>
                            </div>
                            <div class="card-body">

                                <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">ID Pengguna</th>
                                            <th style="text-align: center;">Nama Pengguna</th>
                                            <th style="text-align: center;">Username</th>
                                            <th style="text-align: center;">Email</th>
                                            <th style="text-align: center;">Kata Sandi</th>
                                            <th style="text-align: center;">Minat Pekerjaan</th>
                                            <th style="text-align: center;">Foto Profile</th>
                                            <th style="text-align: center;">Bio</th>
                                            <th style="text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align: center;">1</td>
                                            <td style="text-align: center;">Admin</td>
                                            <td style="text-align: center;">adminku</td>
                                            <td style="text-align: center;">admin@gmail.com</td>
                                            <td style="text-align: center;">admin123</td>
                                            <td style="text-align: center;">Web Developer</td>
                                            <td style="text-align: center;">admin.png</td>
                                            <td style="text-align: center;">looking jobs in your city</td>
                                            <td style="text-align: center;">
                                                <a href="#" class="btn btn-primary"><i class="ri-eye-fill"></i></a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                                <a href="#" class="btn btn-warning">Banned</a>
                                            </td>
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