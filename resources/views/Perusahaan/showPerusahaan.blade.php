@section('title', 'Perusahaan | Data Perusahaan')
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
                            <div class="card-header">
                                <h4 class="header-title">Data Perusahaan</h4>
                                <p class="text-muted mb-0">
                                    Berikut adalah data seluruh perusahaan yang telah terdaftar!
                                </p>
                            </div>
                            <div class="card-body">

                                <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">ID</th>
                                            <th style="text-align: center;">Nama Perusahaan</th>
                                            <th style="text-align: center;">Logo Perusahaan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align: center;">1</td>
                                            <td style="text-align: center;">Nixon</td>
                                            <td style="text-align: center;">logo.png</td>
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