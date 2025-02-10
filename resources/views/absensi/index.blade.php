@extends('layouts.app')

@section('title', 'Absen')

@section('content')
<div class="content-wrapper ml-5 pr-5 pt-3" style="background-color: #989da1;">
    <div class="container-fluid pt-2 mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <h1 class="text-center pt-4 pb-4 text-light" style="background-color: #1e90ff;"><b>Absen</b></h1>
                    <div class="card-body">
                        <div class="container">

                            <!-- Alert Sukses -->
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Sukses!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            <!-- Alert Error -->
                            @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            <!-- Form Absensi -->
                            <form method="POST" action="{{ route('absensi.store') }}">
                                @csrf
                                <!-- Tabel Data Absensi -->
                                <table class="table table-borderless">
                                    <tr>
                                        <th style="width:100px;">NIK</th>
                                        <th style="width: 6px;">:</th>
                                        <td>{{ $user->NIK }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:100px;">Nama</th>
                                        <th style="width: 6px;">:</th>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:100px;">Jabatan</th>
                                        <th style="width: 6px;">:</th>
                                        <td>{{ $user->jabatan }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:100px;">Tanggal</th>
                                        <th style="width: 6px;">:</th>
                                        <td>{{ now()->format('Y-m-d') }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:100px;">Jam</th>
                                        <th style="width: 6px;">:</th>
                                        <td>{{ now()->format('H:i:s') }}</td>
                                    </tr>
                                </table>

                                <!-- Pilihan Absensi -->
                                <div class="mb-3">
                                    <label for="status" class="form-label">Pilih Absensi:</label>
                                    <div>
                                        <input type="radio" id="absenMasuk" name="status" value="Absen Masuk"
                                            @if($sudahAbsen || now()->format('H:i') < '07:30' && now()->format('H:i') <= '08:00' ) disabled @endif>
                                                <label for="absenMasuk">Absen Masuk</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="izin" name="status" value="Izin"
                                            @if($sudahAbsen) disabled @endif>
                                        <label for="izin">Izin</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="sakit" name="status" value="Sakit"
                                            @if($sudahAbsen) disabled @endif>
                                        <label for="sakit">Sakit</label>
                                    </div>
                                </div>

                                <!-- Logika Tombol Berdasarkan Waktu -->
                                @if(now()->format('H:i') >= '12:00' && now()->format('H:i') <= '12:10' )
                                    <div class="mb-3">
                                    <button type="submit" name="status" value="Istirahat" class="btn btn-warning">
                                        Istirahat
                                    </button>
                        </div>
                        @elseif(now()->format('H:i') >= '13:00' && now()->format('H:i') <= '13:10' )
                            <div class="mb-3">
                            <button type="submit" name="status" value="Masuk Istirahat" class="btn btn-success">
                                Masuk Istirahat
                            </button>
                    </div>
                    @endif

                    @if(now()->format('H:i') >= '16:00')
                    <div class="mb-3">
                        <button type="submit" name="status" value="Absen Pulang" class="btn btn-success">
                            Absen Pulang
                        </button>
                    </div>
                    @endif

                    <!-- Tombol Submit -->
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection