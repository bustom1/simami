@extends('layouts.master')

@section('style')
    <link href={{ asset('vendor/datatables/dataTables.bootstrap4.css') }} rel="stylesheet">
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="font-weight-bold text-dark m-0 mx-4">Daftar Kampus</h5>
            <a href="#" class="btn btn-primary btn-sm mr-4">
                <i class="fas fa-plus-circle fa-sm fa-fw mr-2"></i> Tambah Kampus
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kampus</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                            <th>Jurusan</th>
                            <th>Total Mahasiswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($kampuses as $kampus)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $kampus->nama_depan }}</td>
                                <td>{{ $kampus->email ?? '' }}</td>
                                <td>{{ $kampus->profile->no_hp ?? '-'}}</td>
                                <td>
                                    {{ $kampus->alamat->alamat ?? '' }}
                                    {{ $kampus->alamat->provinsi ?? '' }}
                                    {{ $kampus->alamat->kab_kot ?? ''}}
                                    {{ $kampus->alamat->kecamatan ?? ''}}
                                    {{ $kampus->alamat->desa ?? ''}}
                                    {{ $kampus->alamat->kode_pos ?? ''}}
                                </td>
                                <td>
                                    @if ($kampus->jurusanKampus)
                                        <ul>
                                            @foreach ($kampus->jurusanKampus as $jurusan)
                                                <li>{{ $jurusan->nama_jurusan }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        {{ ' - ' }}
                                    @endif

                                </td>
                                <td>{{ $kampus->adminKampus->count() ?? '0'}} Mahasiswa</td>
                            </tr>
                            @php $no++ @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Page level plugins -->
    <script src={{ asset('vendor/datatables/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}></script>

    <!-- Page level custom scripts -->
    <script src={{ asset('js/demo/datatables-demo.js') }}></script>
@endsection