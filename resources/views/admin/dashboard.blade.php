@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper ml-5 pt-5" style="background-color: #989da1;">
    <div class="container-fluid pt-2 mt-5">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    <h1 class="text-center pt-4 pb-4 text-light" style="background-color: #1e90ff;"><b>Dashboard</b></h1>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <!-- Card Jumlah Karyawan -->
                                <div class="col-md-3">
                                    <div class="card text-white bg-success mb-3" style="height: 190px;">
                                        <div class="card-header text-center">
                                            <i class="fas fa-users fa-5x"></i>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center"><b>Jumlah Karyawan</b></h5>
                                            <h3 class="text-center">{{ $jumlahKaryawan }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Jumlah Karyawan Masuk -->
                                <div class="col-md-3">
                                    <div class="card text-white bg-primary mb-3" style="height: 190px;">
                                        <div class="card-header text-center">
                                            <i class="fas fa-check-circle fa-5x"></i>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center"><b>Karyawan Masuk</b></h5>
                                            <h3 class="text-center">{{ $jumlahMasuk }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Jumlah Karyawan Izin -->
                                <div class="col-md-3">
                                    <div class="card text-white bg-warning mb-3" style="height: 190px;">
                                        <div class="card-header text-center">
                                            <i class="fas fa-user-clock fa-5x"></i>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center"><b>Karyawan Izin</b></h5>
                                            <h3 class="text-center">{{ $jumlahIzin }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Jumlah Karyawan Sakit -->
                                <div class="col-md-3">
                                    <div class="card text-white bg-danger mb-3" style="height: 190px;">
                                        <div class="card-header text-center">
                                            <i class="fas fa-briefcase-medical fa-5x"></i>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center"><b>Karyawan Sakit</b></h5>
                                            <h3 class="text-center">{{ $jumlahSakit }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>
@endsection