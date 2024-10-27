@section('title', 'Perusahaan | Update Perusahaan')
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
                @section('namaPage2', 'Update Perusahaan')
                @include('Layouts.breadcrumb')

                <!-- Start Form -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">Update Data Perusahaan</h4>
                            <p class="text-muted mb-0">Silahkan ubah data form di bawah ini untuk mengubah data perusahaan!
                            </p>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label">ID Perusahaan</label>
                                    <div class="col-9">
                                        <input type="number" class="form-control" id="id"
                                            value="1">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-3 col-form-label">Nama Perusahaan</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="nama-perusahaan"
                                            value="Ajinomoto">
                                    </div>
                                </div>
                                <!-- <div class="row mb-3">
                                    <label for="inputPassword5" class="col-3 col-form-label">Kategori Perusahaan</label>
                                    <div class="col-9">
                                        <select class="form-control select2" data-toggle="select2">
                                            <option>Pilih Kategori</option>
                                            <option value="TI">Teknologi Informasi</option>
                                            <option value="KS">Kesehatan</option>
                                            <option value="PD">Pendidikan</option>
                                            <option value="KU">Keuangan</option>
                                            <option value="HK">Hukum</option>
                                            <option value="KT">Konstruksi</option>
                                            <option value="SD">Seni & Desain</option>
                                            <option value="PM">Pemasaran</option>
                                            <option value="IF">Influencer</option>
                                            <option value="OR">Olahraga</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-3 col-form-label">Logo Perusahaan</label>
                                    <div class="col-9">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">

                                                    <div class="card-body">
                                                        <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                                            data-upload-preview-template="#uploadPreviewTemplate">

                                                            <div class="fallback">
                                                                <input name="file" type="file" multiple />
                                                            </div>

                                                            <div class="dz-message needsclick">
                                                                <i class="h1 text-muted ri-upload-cloud-2-line"></i>
                                                                <h3>Drop files here or click to upload.</h3>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- end card-body -->
                                                </div>
                                                <!-- end card-->
                                            </div>
                                            <!-- end col-->
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="justify-content-end row">
                            <div class="col-1 mb-3">
                                <button type="submit" class="btn btn-info">Ubah</button>
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