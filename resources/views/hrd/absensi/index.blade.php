@extends('hrd.layouts.app')

@section('title', 'Data Absensi')

@section('content')
<div class="content-wrapper ml-5 pr-5 pt-5" style="background-color: #989da1;">
    <div class="container-fluid pt-2 mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h2 class="text-center pt-4 mb-1 pb-4 text-light" style="background-color: #1e90ff;"><b>Data Absensi</b></h2>
                    <div class="card-body">
                        @if ($message = session('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif

                        <!-- Form pencarian dan filter -->
                        <form method="GET" action="{{ route('hrd.absensi.index') }}" class="mb-4">
                            <div class="row">
                                <!-- Input pencarian nama -->
                                <div class="col-md-4">
                                    <input type="text" name="search" class="form-control" placeholder="Cari Nama"
                                        value="{{ request('search') }}">
                                </div>
                                <!-- Combobox filter jabatan -->
                                <div class="col-md-4">
                                    <select name="jabatan" class="form-control">
                                        <option value="">Semua Jabatan</option>
                                        @foreach ($allJabatan as $j)
                                        <option value="{{ $j->jabatan }}" {{ request('jabatan') == $j->jabatan ? 'selected' : '' }}>
                                            {{ $j->jabatan }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Tombol cari -->
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary w-100"><i class="fas fa-search"></i> Cari</button>
                                </div>
                                <div class="col-md-2">
                                    <button type="reset" class="btn btn-danger w-100">
                                        <i class="fas fa-sync-alt"></i> reset
                                    </button>
                                </div>
                            </div>
                        </form>

                        <table class="table table-stripped table-bordered mt-2">
                            <thead class="thead text-light" style="background-color: #1e90ff;">
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($absensi as $absen)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <th>{{ $absen->NIK }}</th>
                                    <th>{{ $absen->name }}</th>
                                    <th>{{ $absen->jabatan }}</th>
                                    <th>{{ $absen->tanggal }}</th>
                                    <th>{{ $absen->jam }}</th>
                                    <th>{{ $absen->status }}</th>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">Data tidak ditemukan.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection