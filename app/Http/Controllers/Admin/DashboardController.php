<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use App\Models\Hrd;
use App\Models\Absensi;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::today();

        // Hitung jumlah total karyawan dari tabel users, admins, dan hrd
        $jumlahKaryawan = User::count()
            + Admin::count()
            + Hrd::count();

        // Hitung jumlah karyawan masuk hari ini
        $jumlahMasuk = Absensi::where('tanggal', $today)
            ->where('status', 'Masuk')
            ->count();

        // Hitung jumlah karyawan izin hari ini
        $jumlahIzin = Absensi::where('tanggal', $today)
            ->where('status', 'Izin')
            ->count();

        // Hitung jumlah karyawan sakit hari ini
        $jumlahSakit = Absensi::where('tanggal', $today)
            ->where('status', 'Sakit')
            ->count();

        // Kirim data ke view
        return view('admin.dashboard', compact('jumlahKaryawan', 'jumlahMasuk', 'jumlahIzin', 'jumlahSakit'));
    }
}
