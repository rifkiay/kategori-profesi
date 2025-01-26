@section('title', 'Jobtiva | Tambah Perusahaan')
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
                @section('namaPage2', 'Tambah Perusahaan')
                @include('Layouts.breadcrumb')

                @include('Layouts.alert')

                <!-- Start Form -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">Tambah Perusahaan</h4>
                            <p class="text-muted mb-0">Silahkan isi form di bawah ini untuk menambahkan data perusahaan baru!
                            </p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('perusahaan.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf

                                <div class="row mb-3">
                                    <label for="nama_perusahaan" class="col-3 col-form-label">Nama Perusahaan</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                                            placeholder="Ajinomoto">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="logo_perusahaan" class="col-3 col-form-label">Logo Perusahaan</label>
                                    <div class="col-9">
                                        <input type="file" class="form-control" name="logo_perusahaan" id="logo_perusahaan">
                                    </div>
                                </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-auto p-4 ">
                                <button type="submit" class="btn btn-info">Simpan</button>
                            </div>
                        </div>
                        </form>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div>
            <!-- End Form -->
        </div>
        <!-- container -->
    </div>
    <!-- content -->
    @include('Layouts.footer')
</div>
</div>
<!-- END wrapper -->