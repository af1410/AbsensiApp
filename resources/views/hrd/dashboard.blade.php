@extends('hrd.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper ml-5 pt-2" style="background-color: #989da1;">
    <div class="container-fluid pt-2 mt-5">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    <h1 class="text-center pt-4 pb-4 text-light" style="background-color: #1e90ff;">
                        <b>Dashboard</b>
                    </h1>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($groupedCounts as $jabatan => $jumlah)
                            @php
                            $config = $cardConfig[$jabatan] ?? $cardConfig['default'];
                            $color = $config['color'];
                            $icon = $config['icon'];
                            @endphp
                            <div class="col-md-4 mb-4">
                                <div class="card text-center" style="border: none; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
                                    <div class="card-body {{ $color }} text-white">
                                        <i class="{{ $icon }}" style="font-size: 2rem; margin-bottom: 10px;"></i>
                                        <h5 class="card-title"><b>{{ ucfirst($jabatan) }}</b></h5>
                                        <p class="card-text" style="font-size: 2rem; font-weight: bold;">{{ $jumlah }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            {{-- Card "Semua Karyawan" --}}
                            <div class="col-md-4 mb-4">
                                <div class="card text-center" style="border: none; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
                                    <div class="card-body {{ $cardConfig['Semua Karyawan']['color'] }} text-white">
                                        <i class="{{ $cardConfig['Semua Karyawan']['icon'] }}" style="font-size: 2rem; margin-bottom: 10px;"></i>
                                        <h5 class="card-title"><b>Semua Karyawan</b></h5>
                                        <p class="card-text" style="font-size: 2rem; font-weight: bold;">{{ $totalKaryawan }}</p>
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