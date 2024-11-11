@section('title', 'Jobnesia | Data Perusahaan')
@include('Layouts.header')
<!-- Begin page -->
<div class="wrapper">
    @include('Layouts.topBar')
    @include('Layouts.leftSidebar')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @section('namaPage1', 'Perusahaan')
                @section('namaPage2', 'Data Perusahaan')
                @include('Layouts.breadcrumb')

                <!-- Start Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="header-title">Data Perusahaan</h4>
                                    <p class="text-muted mb-0">
                                        Berikut adalah data seluruh perusahaan yang telah terdaftar!
                                    </p>
                                </div>
                                <a href="{{ url('/Perusahaan/create') }}" class="btn btn-info">
                                    <i class="ri-add-line"></i> Tambah Data Baru
                                </a>
                            </div>
                            <div class="card-body">

                                <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center align-middle">NO</th>
                                            <th class="text-center align-middle">Nama Perusahaan</th>
                                            <th class="text-center align-middle">Logo Perusahaan</th>
                                            <th class="text-center align-middle">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center align-middle">1</td>
                                            <td class="text-center align-middle">Nixon</td>
                                            <td class="text-center align-middle">logo.png</td>
                                            <td class="text-center align-middle">
                                                <div class="d-flex justify-content-center align-items-center gap-1" style="min-height: auto;">
                                                    <a href="{{ url('/Perusahaan/create') }}" class="btn btn-info btn-sm">
                                                        <i class="ri-pencil-fill"></i>
                                                    </a>
                                                    <form action="#" method="POST" style="display:inline;">
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                            <i class="ri-delete-bin-fill"></i>
                                                        </button>
                                                    </form>
                                                </div>
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