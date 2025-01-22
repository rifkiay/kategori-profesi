@section('title', 'Jobnesia | Update Kategori Profesi')
@include('Layouts.header')
<!-- Begin page -->
<div class="wrapper">
    @include('Layouts.topBar')
    @include('Layouts.leftSidebar')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @section('namaPage1', 'Kategori Profesi')
                @section('namaPage2', 'Update Kategori Profesi')
                @include('Layouts.breadcrumb')

                @include('Layouts.alert')

                <!-- Start Form -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">Update Kategori Profesi</h4>
                            <p class="text-muted mb-0">Silahkan isi form di bawah ini untuk mengubah data Kategori Profesi!
                            </p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('kategori_profesi.update', $kategoriProfesi->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <label for="kategori_profesi" class="col-3 col-form-label">Nama Kategori Profesi</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="kategori_profesi" name="kategori_profesi"
                                            placeholder="Teknologi" value="{{$kategoriProfesi->kategori_profesi}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="icon" class="col-3 col-form-label">Icon Profesi</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" name="icon" id="icon" placeholder="mdi mdi-heart-pulse" value="{{$kategoriProfesi->icon}}">
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