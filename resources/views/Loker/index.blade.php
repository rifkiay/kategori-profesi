@section('title', 'Jobtiva | Data Lowongan Pekerjaan')
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
                @section('namaPage2', 'Data Lowongan Pekerjaan')
                @include('Layouts.breadcrumb')

                @include('Layouts.alert')

                <!-- Start Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div>

                                    <h4 class="header-title">Data Lowongan Pekerjaan</h4>
                                    <p class="text-muted mb-0">
                                        Berikut adalah data seluruh lowongan pekerjaan yang telah terdaftar!
                                    </p>
                                </div>
                                <a href="{{ route('loker.create') }}" class="btn btn-info">
                                    <i class="ri-add-line"></i> Tambah Data Baru
                                </a>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="scroll-horizontal-datatable" class="table table-striped table-responsive">
                                        <thead class="text-center text-nowrap">
                                            <tr>
                                                <th class="text-center align-middle">No</th>
                                                <th class="text-center align-middle">ID Kategori Profesi</th>
                                                <th class="text-center align-middle">ID Perusahaan</th>
                                                <th class="text-center align-middle">Nama Pekerjaan</th>
                                                <th class="text-center align-middle">Nama Perusahaan</th>
                                                <th style="text-align: center; width: 40%;">Deskripsi Pekerjaan</th>
                                                <th class="text-center align-middle">Gaji</th>
                                                <th class="text-center align-middle">Kualifikasi</th>
                                                <th class="text-center align-middle">Tanggal Posting</th>
                                                <th class="text-center align-middle">Akhir Pendaftaran</th>
                                                <th class="text-center align-middle">Status</th>
                                                <th class="text-center align-middle">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 0.7rem;">
                                            @foreach ($loker as $item)
                                            <tr>
                                                <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                                <td class="text-center align-middle">{{ $item->id_kategori_profesi }}</td>
                                                <td class="text-center align-middle">{{ $item->id_perusahaan }}</td>
                                                <td class="text-center align-middle"> {{ $item->judul }}</td>
                                                <td class="text-center align-middle">{{ $item->nama_perusahaan }}</td>
                                                <td class="text-center align-middle text-wrap" style="max-width: 200px;">{{ $item->deskripsi_loker }}</td>
                                                <td class="text-center text-nowrap align-middle">
                                                    <span class="badge bg-info bg-opacity-15 p-1">
                                                        Rp {{ $item->gaji }}
                                                    </span>
                                                </td>
                                                <td class="text-center align-middle">{{ $item->kualifikasi }}</td>
                                                <td class="text-center align-middle">{{ $item->tanggal_posting }}</td>
                                                <td class="text-center align-middle">{{ $item->akhir_pendaftaran }}</td>
                                                <td class="text-center align-middle">
                                                    @if($item->status == 'available')
                                                    <span class="badge bg-success bg-opacity-12 p-1">
                                                        {{ $item->status }}
                                                    </span>
                                                    @elseif($item->status == 'closed')
                                                    <span class="badge bg-danger bg-opacity-12 p-1">
                                                        {{ $item->status }}
                                                    </span>
                                                    @else
                                                    <span class="badge bg-secondary bg-opacity-12 p-1">
                                                        {{ $item->status }}
                                                    </span>
                                                    @endif
                                                </td>
                                                <td class="text-center align-middle">
                                                    <div class="d-flex justify-content-center align-items-center gap-1" style="min-height: auto;">
                                                        <a href="#" class="btn btn-warning btn-sm"><i class="ri-eye-fill"></i></a>
                                                        <a href="{{ route('loker.edit', $item->id) }}" class="btn btn-info btn-sm">
                                                            <i class="ri-pencil-fill"></i>
                                                        </a>
                                                        <form action="{{ route('loker.destroy', $item->id) }}" method="POST" style="display:inline;">
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