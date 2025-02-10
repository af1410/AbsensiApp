<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        // Ambil semua data absensi berdasarkan NIK
        $absensi = DB::table('absensi')
            ->where('NIK', $user->NIK)
            ->get();

        $jumlahMasuk = DB::table('absensi')
            ->where('NIK', $user->NIK)
            ->where('status', 'Absen Masuk')
            ->count();

        $jumlahSakit = DB::table('absensi')
            ->where('NIK', $user->NIK)
            ->where('status', 'Sakit')
            ->count();

        $jumlahIzin = DB::table('absensi')
            ->where('NIK', $user->NIK)
            ->where('status', 'Izin')
            ->count();

        // Kirim data ke view
        return view('dashboard', compact('user', 'absensi', 'jumlahMasuk', 'jumlahSakit', 'jumlahIzin'));
    }

    public function create() {}

    public function store(Request $request)
    {
        // Simpan data absensi ke database
        // Misalnya: NIK, status absensi, waktu, dan tanggal
        $user = Auth::user();
        $data = [
            'NIK' => $user->NIK, // Ganti dengan data NIK karyawan yang login
            'name' => $user->name, // Ganti dengan data NIK karyawan yang login
            'jabatan' => $user->jabatan, // Ganti dengan data NIK karyawan yang login
            'status' => $request->input('status'),
            'tanggal' => now()->format('Y-m-d'),
            'jam' => now()->format('H:i:s'),
        ];

        // Simpan ke database (sesuaikan dengan tabel Anda)
        Absensi::create($data);

        return redirect()->back()->with('success', 'Absensi berhasil disimpan!!!');
    }


    public function edit($id) {}

    public function update(Request $request, $id) {}

    public function destroy($id) {}

    public function print() {}
}
