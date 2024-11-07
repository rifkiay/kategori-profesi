@section('title', 'Jobnesia | Data Profesi')
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
                @section('namaPage2', 'Data Profesi')
                @include('Layouts.breadcrumb')

                <!-- Start Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Data Profesi</h4>
                                <p class="text-muted mb-0">
                                    Berikut adalah data seluruh Profesi yang telah terdaftar!
                                </p>
                            </div>
                            <div class="card-body">

                                <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap">
                                    <thead>
                                        <tr>
                                            <!-- <th style="text-align: center;">ID Profesi</th> -->
                                            <th style="text-align: center;">ID Kategori Profesi</th>
                                            <th style="text-align: center;">Nama Profesi</th>
                                            <th style="text-align: center; width: 40%;">Deskripsi Profesi</th>
                                            <th style="text-align: center;">Keterampilan</th>
                                            <th style="text-align: center;">Gaji</th>
                                            <th style="text-align: center;">Gambar Profesi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($profesi as $item)
                                        <tr>
                                            <!-- <td style="text-align: center;">{{ $item->id_profesi }}</td> -->
                                            <td style="text-align: center;">{{ $item->id_kategori_profesi }}</td>
                                            <td style="text-align: center;">{{ $item->nama_profesi }}</td>
                                            <td style="text-align: justify;">{{ $item->deskripsi_profesi }}</td>
                                            <td style="text-align: center;">{{ $item->keterampilan }}</td>
                                            <td style="text-align: center;">{{ $item->gaji }}</td>
                                            <td style="text-align: center;">{{$item->gambar_profesi}}</td>
                                        </tr>
                                        @endforeach

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