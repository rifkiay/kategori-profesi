@section('title', 'Jobnesia | Data Perusahaan')
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

                @include('Layouts.alert')

                <!-- Start Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="header-title">Data Perusahaan</h4>
                                    <p class="text-muted mb-0">
                                        Berikut adalah data seluruh perusahaan yang telah terdaftar!
                                    </p>
                                </div>
                                <a href="{{ route('perusahaan.create') }}" class="btn btn-info">
                                    <i class="ri-add-line"></i> Tambah Data Baru
                                </a>
                            </div>
                            <div class="card-body">

                                <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center align-middle">NO</th>
                                            <th class="text-center align-middle">Nama Perusahaan</th>
                                            <th class="text-center align-middle">Logo Perusahaan</th>
                                            <th class="text-center align-middle">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perusahaans as $item)
                                        <tr>
                                            <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                            <td class="text-center align-middle">{{ $item->nama_perusahaan }}</td>
                                            <td class="text-center align-middle">
                                                @if($item->logo_perusahaan)
                                                <img src="{{ asset('storage/' . $item->logo_perusahaan) }}" alt="Logo Perusahaan" width="100">
                                                @else
                                                <span>Gambar tidak tersedia</span>
                                                @endif
                                            </td>
                                            <td class="text-center align-middle">
                                                <div class="d-flex justify-content-center align-items-center gap-1" style="min-height: auto;">
                                                    <a href="{{ route('perusahaan.edit', $item->id) }}" class="btn btn-info btn-sm">
                                                        <i class="ri-pencil-fill"></i>
                                                    </a>
                                                    <form action="{{ route('perusahaan.destroy', $item->id) }}" method="POST" style="display:inline;">
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