@extends('layouts.master')

@section('content')
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <a href="{{ route('user.index') }}" class="text-decoration-none">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Mahasiswa Terdaftar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $allUser }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <a href="{{ route('lowongan.index') }}" class="text-decoration-none">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Lowongan Aktif</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $openInformasi }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-business-time fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <a href="{{ route('pendaftar.index') }}" class="text-decoration-none">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Mahasiswa Mendafar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mhsApplay }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-clock fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <a href="{{ route('pendaftar.index') }}" class="text-decoration-none">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Mahasiswa Seleksi Perusahaan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mhsApprove }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-check fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>



        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <a href="{{ route('pendaftar.index') }}" class="text-decoration-none">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Mahasiswa Ditolak</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mhsReject }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar-times fa-2x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <a href="{{ route('pendaftar.index') }}" class="text-decoration-none">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Mahasiswa Selesai Magang</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mhsSelect }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar-check fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
@endsection
