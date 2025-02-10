@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper ml-5 pt-2" style="background-color: #989da1;">
    <div class="container-fluid pt-2 mt-5">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    <h1 class="text-center pt-4 pb-4 text-light" style="background-color: #1e90ff;"><b>Dashboard</b></h1>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-2 ">
                                    <div class="card text-white bg-success mb-3" style="height: 190px;">
                                        <div class="card-header text-center"><i class="fas fa-check-circle fa-5x"></i></div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center"><b>Jumlah Masuk {{ $jumlahMasuk }} Hari</b></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <div class="card text-white bg-primary mb-3" style="height: 190px;">
                                        <div class="card-header text-center"><i class="fas fa-medkit fa-5x"></i></div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center"><b>Jumlah Sakit {{ $jumlahSakit }} Hari</b></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <div class="card text-white bg-danger mb-3" style="height: 190px;">
                                        <div class="card-header text-center"><i class="fas fa-user-clock fa-5x"></i></div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center"><b>Jumlah Izin {{ $jumlahIzin }} Hari</b></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <h3 class="text-center mt-3 mb-4"><b>Absen Bulan Ini</b></h3>
                            <table class="table table-striped table-bordered">
                                <thead class="bg-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Jam</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($absensi as $index => $absen)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $absen->tanggal }}</td>
                                        <td>{{ $absen->status }}</td>
                                        <td>{{ $absen->jam }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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