<?php

use App\Http\Controllers\Admin\AbsensiController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HRDController;
use App\Http\Controllers\Admin\KaryawanController;
use App\Http\Controllers\Admin\AbsenController;

Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'], function () {
        return view('admin.dashboard');
    })->middleware(['verified'])->name('dashboard');;

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Admin
    Route::get('/dashboard', [
        DashboardController::class,
        'index'
    ])->name('dashboard');



    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/{id}/update', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{id}/delete', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::get('/admin/print', [AdminController::class, 'print'])->name('admin.print');

    //Karyawan
    Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
    Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
    Route::post('/karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');
    Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
    Route::put('/karyawan/{id}/update', [KaryawanController::class, 'update'])->name('karyawan.update');
    Route::delete('/karyawan/{id}/delete', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
    Route::get('/karyawan/print', [KaryawanController::class, 'print'])->name('karyawan.print');

    //HRD
    Route::get('/HRD', [HRDController::class, 'index'])->name('HRD.index');
    Route::get('/HRD/create', [HRDController::class, 'create'])->name('HRD.create');
    Route::post('/HRD/store', [HRDController::class, 'store'])->name('HRD.store');
    Route::get('/HRD/{id}/edit', [HRDController::class, 'edit'])->name('HRD.edit');
    Route::put('/HRD/{id}/update', [HRDController::class, 'update'])->name('HRD.update');
    Route::delete('/HRD/{id}/delete', [HRDController::class, 'destroy'])->name('HRD.destroy');
    Route::get('/HRD/print', [HRDController::class, 'print'])->name('HRD.print');

    //Absensi
    Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.index');
    Route::get('/absen/index', [AbsenController::class, 'index'])->name('absen.index');
    Route::post('/absen/store', [AbsenController::class, 'store'])->name('absen.store');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
