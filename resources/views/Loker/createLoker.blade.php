@section('title', 'Jobnesia | Tambah Lowongan Pekerjaan')
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
                @section('namaPage2', 'Tambah Lowongan Pekerjaan')
                @include('Layouts.breadcrumb')

                @include('Layouts.alert')

                <!-- Start Form -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">Tambah Lowongan Pekerjaan</h4>
                            <p class="text-muted mb-0">Silahkan isi form di bawah ini untuk menambahkan data lowongan pekerjaan baru!
                            </p>
                        </div>
                        <div class="card-body">
                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf

                                <div class="row mb-3">
                                    <label for="id_kategori_profesi" class="col-3 col-form-label">ID Kategori loker</label>
                                    <div class="col-9">
                                        <select class="form-control select2" name="id_kategori_profesi" id="id_kategori_profesi" data-toggle="select2">
                                            <option>Pilih Kategori</option>
                                            <option value="1">Teknologi Informasi</option>
                                            <option value="2">Kesehatan</option>
                                            <option value="3">Pendidikan</option>
                                            <option value="4">Keuangan</option>
                                            <option value="5">Hukum</option>
                                            <option value="6">Konstruksi</option>
                                            <option value="7">Seni & Desain</option>
                                            <option value="8">Pemasaran</option>
                                            <option value="9">Influencer</option>
                                            <option value="10">Olahraga</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="id_perusahaan" class="col-3 col-form-label">ID Perusahaan</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="id_perusahaan" name="id_perusahaan"
                                            placeholder="2">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="judul" class="col-3 col-form-label">Nama Lowongan Pekerjaan</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="judul" name="judul"
                                            placeholder="Software Developer">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="nama_perusahaan" class="col-3 col-form-label">Nama Perusahaan</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                                            placeholder="Ajinomoto">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="deskripsi_loker" class="col-3 col-form-label">Deskripsi Lowongan Pekerjaan</label>
                                    <div class="col-9">
                                        <textarea class="form-control" id="deskripsi_loker" name="deskripsi_loker"
                                            rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="gaji" class="col-3 col-form-label">Gaji</label>
                                    <div class="col-9">
                                        <input type="number" class="form-control" id="gaji" name="gaji"
                                            placeholder="10.000.000">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="kualifikasi" class="col-3 col-form-label">Kualifikasi</label>
                                    <div class="col-9">
                                        <textarea class="form-control" id="kualifikasi" name="kualifikasi"
                                            rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="tanggal_posting" class="col-3 col-form-label">Tanggal Posting</label>
                                    <div class="col-9">
                                        <input type="date" class="form-control" name="tanggal_posting" id="tanggal_posting">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="akhir_pendaftaran" class="col-3 col-form-label">Batas Pendaftaran</label>
                                    <div class="col-9">
                                        <input type="date" class="form-control" name="akhir_pendaftaran" id="akhir_pendaftaran">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="status" class="col-3 col-form-label">Status</label>
                                    <div class="col-9">
                                        <select class="form-control select2" name="status" id="Status" data-toggle="select2">
                                            <option>Pilih Status</option>
                                            <option value="1">Available</option>
                                            <option value="2">Closed</option>

                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-auto p-4">
                                <button type="submit" class="btn btn-info">Simpan</button>
                            </div>
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