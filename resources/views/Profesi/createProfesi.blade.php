@section('title', 'Jobnesia | Tambah Profesi')
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
                @section('namaPage2', 'Tambah Profesi')
                @include('Layouts.breadcrumb')

                @include('Layouts.alert')

                <!-- Start Form -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">Tambah Profesi</h4>
                            <p class="text-muted mb-0">Silahkan isi form di bawah ini untuk menambahkan data profesi baru!
                            </p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('profesi.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="row mb-3">
                                    <label for="id_kategori_profesi" class="col-3 col-form-label">ID Kategori Profesi</label>
                                    <div class="col-9">
                                        <select class="form-control" name="id_kategori_profesi" id="id_kategori_profesi">
                                            <option value="">Pilih Kategori Profesi</option>
                                            @foreach ($kategori as $item)
                                            <option value="{{ $item->id }}" {{ old('id_kategori_profesi') == $item->id ? 'selected' : '' }}>
                                            {{ $item->id }} - {{ $item->kategori_profesi }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('id_kategori_profesi')
                                        <div class="alert alert-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="nama_profesi" class="col-3 col-form-label">Nama Profesi</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="nama_profesi" name="nama_profesi"
                                            placeholder="Software Developer" required>
                                    </div>
                                    @error('nama_profesi')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <label for="deskripsi_profesi" class="col-3 col-form-label"> Deskripsi Profesi</label>
                                    <div class="col-9">
                                        <textarea class="form-control" id="deskripsi_profesi" name="deskripsi_profesi"
                                            rows="5"></textarea>
                                    </div>
                                    @error('deskripsi_profesi')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <label for="keterampilan" class="col-3 col-form-label">Keterampilan</label>
                                    <div class="col-9">
                                        <textarea class="form-control" id="keterampilan" name="keterampilan"
                                            rows="5"></textarea>
                                    </div>
                                    @error('keterampilan')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <label for="gaji" class="col-3 col-form-label">Gaji</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="gaji" name="gaji"
                                            placeholder="10.000.000">
                                    </div>
                                    @error('gaji')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <label for="gambar_profesi" class="col-3 col-form-label">Gambar Profesi</label>
                                    <div class="col-9">
                                        <input type="file" class="form-control" name="gambar_profesi" id="gambar_profesi">
                                    </div>
                                    @error('gambar_profesi')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
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