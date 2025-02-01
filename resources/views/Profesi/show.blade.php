@section('title', 'Jobtiva | Data Profesi')
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

                @include('Layouts.alert')

                <!-- Start Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="header-title">Data Profesi</h4>
                                    <p class="text-muted mb-0" style="white-space: nowrap;">
                                        Berikut adalah data seluruh Profesi yang telah terdaftar!
                                    </p>
                                </div>
                                <a href="{{ route('profesi.create') }}" class="btn btn-info">
                                    <i class="ri-add-line"></i> Tambah Data Baru
                                </a>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap">
                                        <thead>
                                            <tr class="text-center text-nowrap">
                                                <th class="text-center">No</th>
                                                <th class="text-center">Kategori Profesi</th>
                                                <th class="text-center">Nama Profesi</th>
                                                <th class="text-center" style="width: 40%;">Deskripsi Profesi</th>
                                                <th class="text-center">Keterampilan</th>
                                                <th class="text-center">Gaji</th>
                                                <th class="text-center">Gambar Profesi</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 0.8rem;">
                                            @foreach ($profesi as $item)
                                            <tr>
                                                <td class="text-center align-middle">{{ $profesi->firstItem() + $loop->index }}</td>
                                                <td class="text-center align-middle">{{ $item->kategoriProfesi->kategori_profesi }}</td>
                                                <td class="text-center align-middle">{{ $item->nama_profesi }}</td>
                                                <td class="align-middle text-wrap" style="text-align: justify; max-width: 200px;">{{ Str::limit($item->deskripsi_profesi, 80) }}</td>
                                                <td class="align-middle">
                                                    <ul class="list-unstyled">
                                                        @php
                                                        $keterampilanList = explode("\n", $item->keterampilan);
                                                        @endphp
                                    
                                                        @foreach ($keterampilanList as $keterampilan)
                                                        <li><i class="mdi mdi-check-circle-outline text-success"></i> {{ Str::limit(trim($keterampilan), 7) }}</li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                <td class="text-center text-nowrap align-middle">
                                                    <span class="badge bg-success bg-opacity-15 p-1">
                                                        Rp {{$item->gaji}}
                                                    </span>
                                                </td>
                                                <td class="text-center align-middle">
                                                    @if($item->gambar_profesi)
                                                    <div class="d-flex justify-content-center align-items-center" style="border: 2px solid #ddd; padding: 5px; border-radius: 8px; width: 100px; height: 100px; overflow: hidden;">
                                                        <img src="{{ asset('storage/' . $item->gambar_profesi) }}" alt="Gambar Profesi" style="width: 100%; height: 100%; object-fit: cover;">
                                                    </div>
                                                    @else
                                                    <div class="d-flex justify-content-center align-items-center" style="width: 100px; height: 100px; border: 2px solid #ddd; border-radius: 8px;">
                                                        <span>Gambar tidak tersedia</span>
                                                    </div>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center align-items-center gap-1" style="min-height: 100px;">
                                                        <a href="{{ route('profesi.show', $item->id) }}" class="btn btn-warning btn-sm"><i class="ri-eye-fill"></i></a>
                                                        <a href="{{ route('profesi.edit', $item->id) }}" class="btn btn-info btn-sm">
                                                            <i class="ri-pencil-fill"></i>
                                                        </a>
                                                        <form action="{{ route('profesi.destroy', $item->id) }}" method="POST" style="display:inline;">
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
                                    
                                    <!-- Pagination Links dengan Desain yang Lebih Menarik -->
                                    <div class="d-flex justify-content-center mt-3">
                                        <nav>
                                            <ul class="pagination pagination-sm">
                                                @if ($profesi->onFirstPage())
                                                    <li class="page-item disabled"><span class="page-link">«</span></li>
                                                @else
                                                    <li class="page-item"><a class="page-link" href="{{ $profesi->previousPageUrl() }}">«</a></li>
                                                @endif

                                                @foreach ($profesi->getUrlRange(1, $profesi->lastPage()) as $page => $url)
                                                    <li class="page-item {{ $profesi->currentPage() == $page ? 'active' : '' }}">
                                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @endforeach

                                                @if ($profesi->hasMorePages())
                                                    <li class="page-item"><a class="page-link" href="{{ $profesi->nextPageUrl() }}">»</a></li>
                                                @else
                                                    <li class="page-item disabled"><span class="page-link">»</span></li>
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <!-- End Table -->

            </div> <!-- container-fluid -->
        </div> <!-- content -->

        @include('Layouts.footer')
    </div> <!-- content-page -->
</div> <!-- wrapper -->
<!-- END wrapper -->