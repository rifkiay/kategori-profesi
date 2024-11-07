@section('title', 'Jobnesia | Data Kategori Profesi')
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
                @section('namaPage2', 'Data Kategori Profesi')
                @include('Layouts.breadcrumb')

                <!-- Start Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Data Kategori Profesi</h4>
                                <p class="text-muted mb-0">
                                    Berikut adalah data seluruh Kategori Profesi yang telah terdaftar!
                                </p>
                            </div>
                            <div class="card-body">

                                <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap">
                                    <thead>
                                        <tr>
                                            <!-- <th style="text-align: center;">ID Kategori Profesi</th> -->
                                            <th style="text-align: center;">Kategori Profesi</th>
                                            <th style="text-align: center; ">Icon</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kategori as $item)
                                        <tr>
                                            <!-- <td style="text-align: center;">{{ $item->id_kategori_profesi }}</td> -->
                                            <td style="text-align: center;">{{ $item->kategori_profesi }}</td>
                                            <td style="text-align: center;">{{ $item->icon }}</td>
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