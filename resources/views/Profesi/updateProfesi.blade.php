@section('title', 'Jobnesia | Update Profesi')
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
                @section('namaPage2', 'Update Profesi')
                @include('Layouts.breadcrumb')

                @include('Layouts.alert')

                <!-- Start Form -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">Update Profesi</h4>
                            <p class="text-muted mb-0">Silahkan ubah data form di bawah ini untuk mengubah data profesi!
                            </p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('profesi.update', $profesi->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <label for="id_kategori_profesi" class="col-3 col-form-label">ID Kategori Profesi</label>
                                    <div class="col-9">
                                        <select class="form-control select2" name="id_kategori_profesi" id="id_kategori_profesi" data-toggle="select2">
                                            <option>Pilih Kategori</option>
                                            <option value="1" {{ $profesi->id_kategori_profesi == 1 ? 'selected' : '' }}>1 Teknologi Informasi</option>
                                            <option value="2" {{ $profesi->id_kategori_profesi == 2 ? 'selected' : '' }}>2 Kesehatan</option>
                                            <option value="3" {{ $profesi->id_kategori_profesi == 3 ? 'selected' : '' }}>3 Pendidikan</option>
                                            <option value="4" {{ $profesi->id_kategori_profesi == 4 ? 'selected' : '' }}>4 Keuangan</option>
                                            <option value="5" {{ $profesi->id_kategori_profesi == 5 ? 'selected' : '' }}>5 Hukum</option>
                                            <option value="6" {{ $profesi->id_kategori_profesi == 6 ? 'selected' : '' }}>6 Konstruksi</option>
                                            <option value="7" {{ $profesi->id_kategori_profesi == 7 ? 'selected' : '' }}>7 Seni & Desain</option>
                                            <option value="8" {{ $profesi->id_kategori_profesi == 8 ? 'selected' : '' }}>8 Pemasaran</option>
                                            <option value="9" {{ $profesi->id_kategori_profesi == 9 ? 'selected' : '' }}>9 Influencer</option>
                                            <option value="10" {{ $profesi->id_kategori_profesi == 10 ? 'selected' : '' }}>10 Olahraga</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="nama_profesi" class="col-3 col-form-label">Nama Profesi</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="nama_profesi" name="nama_profesi"
                                            placeholder="Software Developer" value="{{ $profesi->nama_profesi }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="deskripsi_profesi" class="col-3 col-form-label">Deskripsi Profesi</label>
                                    <div class="col-9">
                                        <textarea class="form-control" id="deskripsi_profesi" name="deskripsi_profesi"
                                            rows="5">{{ $profesi->deskripsi_profesi }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="keterampilan" class="col-3 col-form-label">Keterampilan</label>
                                    <div class="col-9">
                                        <textarea class="form-control" id="keterampilan" name="keterampilan"
                                            rows="5">{{ $profesi->keterampilan }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="gaji" class="col-3 col-form-label">Gaji</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="gaji" name="gaji" value="{{ $profesi->gaji }}"
                                            placeholder="10.000.000">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="gambar_profesi" class="col-3 col-form-label">Gambar Profesi</label>
                                    <div class="col-9">
                                        <input type="file" class="form-control" name="gambar_profesi" id="gambar_profesi">
                                        @if($profesi->gambar_profesi)
                                        <img src="{{ asset('storage/' . $profesi->gambar_profesi) }}" alt="Gambar Profesi" width="100" class="mt-2">
                                        @endif
                                    </div>
                                </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-auto p-4">
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