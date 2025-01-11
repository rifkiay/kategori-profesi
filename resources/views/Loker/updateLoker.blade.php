@section('title', 'Jobnesia | Update Lowongan Pekerjaan')
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
                @section('namaPage2', 'Update Lowongan Pekerjaan')
                @include('Layouts.breadcrumb')

                @include('Layouts.alert')

                <!-- Start Form -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">Update Lowongan Pekerjaan</h4>
                            <p class="text-muted mb-0">Silahkan ubah form di bawah ini untuk mengubah data lowongan pekerjaan baru!
                            </p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('loker.update', $loker->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <label for="id_kategori_profesi" class="col-3 col-form-label">ID Kategori loker</label>
                                    <div class="col-9">
                                        <select class="form-control select2" name="id_kategori_profesi" id="id_kategori_profesi" data-toggle="select2">
                                            <option>Pilih Kategori</option>
                                            <option value="1" {{ $loker->id_kategori_profesi == 1 ? 'selected' : '' }}>1 Teknologi Informasi</option>
                                            <option value="2" {{ $loker->id_kategori_profesi == 2 ? 'selected' : '' }}>2 Kesehatan</option>
                                            <option value="3" {{ $loker->id_kategori_profesi == 3 ? 'selected' : '' }}>3 Pendidikan</option>
                                            <option value="4" {{ $loker->id_kategori_profesi == 4 ? 'selected' : '' }}>4 Keuangan</option>
                                            <option value="5" {{ $loker->id_kategori_profesi == 5 ? 'selected' : '' }}>5 Hukum</option>
                                            <option value="6" {{ $loker->id_kategori_profesi == 6 ? 'selected' : '' }}>6 Konstruksi</option>
                                            <option value="7" {{ $loker->id_kategori_profesi == 7 ? 'selected' : '' }}>7 Seni & Desain</option>
                                            <option value="8" {{ $loker->id_kategori_profesi == 8 ? 'selected' : '' }}>8 Pemasaran</option>
                                            <option value="9" {{ $loker->id_kategori_profesi == 9 ? 'selected' : '' }}>9 Influencer</option>
                                            <option value="10" {{ $loker->id_kategori_profesi == 10 ? 'selected' : '' }}>10 Olahraga</option>
                                        </select>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="id_perusahaan" class="col-3 col-form-label">ID Perusahaan</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="id_perusahaan" name="id_perusahaan"
                                            placeholder="2" value="{{ $loker->id_perusahaan }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="judul" class="col-3 col-form-label">Nama Lowongan Pekerjaan</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="judul" name="judul"
                                            placeholder="Software Developer" value="{{ $loker->judul }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="nama_perusahaan" class="col-3 col-form-label">Nama Perusahaan</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                                            placeholder="Ajinomoto" value="{{ $loker->nama_perusahaan }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="deskripsi_loker" class="col-3 col-form-label">Deskripsi Lowongan Pekerjaan</label>
                                    <div class="col-9">
                                        <textarea class="form-control" id="deskripsi_loker" name="deskripsi_loker"
                                            rows="5">{{ $loker->deskripsi_loker }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="gaji" class="col-3 col-form-label">Gaji</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="gaji" name="gaji"
                                            placeholder="10.000.000" value="{{ $loker->gaji }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="kualifikasi" class="col-3 col-form-label">Kualifikasi</label>
                                    <div class="col-9">
                                        <textarea class="form-control" id="kualifikasi" name="kualifikasi"
                                            rows="5">{{ $loker->kualifikasi }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="tanggal_posting" class="col-3 col-form-label">Tanggal Posting</label>
                                    <div class="col-9">
                                        <input type="date" class="form-control" name="tanggal_posting" id="tanggal_posting" value="{{ $loker->tanggal_posting }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="akhir_pendaftaran" class="col-3 col-form-label">Batas Pendaftaran</label>
                                    <div class="col-9">
                                        <input type="date" class="form-control" name="akhir_pendaftaran" id="akhir_pendaftaran" value="{{ $loker->akhir_pendaftaran }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="status" class="col-3 col-form-label">Status</label>
                                    <div class="col-9">
                                        <select class="form-control select2" name="status" id="Status" data-toggle="select2">
                                            <option value="">Pilih Status</option>
                                            <option value="available" {{ old('status', $loker->status) == 'available' ? 'selected' : '' }}>Available</option>
                                            <option value="closed" {{ old('status', $loker->status) == 'closed' ? 'selected' : '' }}>Closed</option>
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