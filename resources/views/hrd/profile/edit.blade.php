@extends('hrd.layouts.app')

@section('title', 'Edit Profile')

@section('content')
<div class="content-wrapper ml-5 pr-5 pt-5" style="background-color: #989da1;">
    <div class="container-fluid pt-2 mt-5">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center pt-4 pb-4 text-light" style="background-color: #1e90ff;"><b>Edit Profile</b></h3>
                    <div class="card-body">
                        <form action="{{ route('profile.update', auth()->user()->id) }}" method="POST">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="NIK" name="NIK" value="{{ auth()->user()->NIK }}" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Select" class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <select id="jabatan" name="jabatan" class="form-control">
                                        <option value="{{ auth()->user()->jabatan }}">{{ auth()->user()->jabatan }}</option>
                                        <option value="Supervisor">Supervisor</option>
                                        <option value="Manager">Leader</option>
                                        <option value="Admin">Operator</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ auth()->user()->alamat }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nomor HP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ auth()->user()->no_hp }}" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password" value="" required>
                                    <small class="text-muted">Masukan kembali Password yang lama jika tidak ingin merubahnya</small>
                                </div>
                            </div>
                            <div class="form-group row center">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-3">
                                    <a href="{{ url()->previous() }}" class="btn btn-primary px-3">
                                        <i class="fa fa-arrow-left"></i> Kembali
                                    </a>
                                </div>
                                <div class="col-sm-3">
                                    <button type="reset" class="btn btn-danger px-4">
                                        <i class="bi bi-arrow-repeat"></i> Reset
                                    </button>
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-success px-3">
                                        <i class="bi bi-floppy2-fill"></i> Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection