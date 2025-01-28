@section('title', 'Jobtiva | Data Pengguna')
@include('Layouts.header')
<!-- Begin page -->
<div class="wrapper">
    @include('Layouts.topBar')
    @include('Layouts.leftSidebar')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @section('namaPage1', 'Pengguna')
                @section('namaPage2', 'Data Pengguna')
                @include('Layouts.breadcrumb')

                @include('Layouts.alert')

                <!-- Start Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Data Pengguna</h4>
                                <p class="text-muted mb-0">
                                    Berikut adalah data seluruh pengguna yang telah terdaftar!
                                </p>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap">
                                        <thead>
                                            <tr class="text-center text-nowrap">
                                                <th class="text-center align-middle">No</th>
                                                <th class="text-center align-middle">Nama Pengguna</th>
                                                <th class="text-center align-middle">Username</th>
                                                <th class="text-center align-middle">Email</th>
                                                <th class="text-center align-middle">Minat Pekerjaan</th>
                                                <th class="text-center align-middle">Bio</th>
                                                <th class="text-center align-middle">Foto Profile</th>
                                                <th class="text-center align-middle">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 0.8rem;">
                                            @foreach ($users as $item)
                                            <tr>
                                                <td class="text-center align-middle">{{$loop->iteration}}</td>
                                                <td class="text-center align-middle">{{$item->nama}}</td>
                                                <td class="text-center align-middle">{{$item->username}}</td>
                                                <td class="text-center align-middle">{{$item->email}}</td>
                                                <td class="text-center align-middle">{{$item->minat}}</td>
                                                <td class="text-center align-middle">{{$item->bio}}</td>
                                                <td class="text-center align-middle">{{$item->foto_profile}}</td>
                                                <td class="text-center align-middle">
                                                    <div class="d-flex justify-content-center align-items-center gap-1" style="min-height: auto;">
                                                        <form action="{{ route('user.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                                <i class="ri-delete-bin-fill"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>


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