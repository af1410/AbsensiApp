<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data dari tabel users
        $userCounts = DB::table('users')
            ->select('jabatan', DB::raw('COUNT(*) as jumlah'))
            ->groupBy('jabatan')
            ->get();

        // Ambil data dari tabel hrd
        $hrdCounts = DB::table('hrd')
            ->select('jabatan', DB::raw('COUNT(*) as jumlah'))
            ->groupBy('jabatan')
            ->get();

        // Ambil data dari tabel admins termasuk Admin
        $adminCounts = DB::table('admins')
            ->select('jabatan', DB::raw('COUNT(*) as jumlah'))
            ->groupBy('jabatan')
            ->get();

        // Gabungkan data dan satukan jabatan yang sama
        $allCounts = $userCounts->merge($hrdCounts)->merge($adminCounts);
        $groupedCounts = $allCounts->groupBy('jabatan')->map(function ($group) {
            return $group->sum('jumlah');
        });

        // Hitung total semua karyawan
        $totalKaryawan = $groupedCounts->sum();

        // Warna dan ikon untuk setiap jabatan (dapat diatur sesuai keinginan)
        $cardConfig = [
            'HRD' => ['color' => 'bg-danger', 'icon' => 'fas fa-user-tie'],
            'Supervisor' => ['color' => 'bg-warning', 'icon' => 'fas fa-user'],
            'Operator' => ['color' => 'bg-primary', 'icon' => 'fas fa-chalkboard-teacher'],
            'Leader' => ['color' => 'bg-success', 'icon' => 'fas fa-briefcase'],
            'Admin' => ['color' => 'bg-dark', 'icon' => 'fas fa-user-shield'],
            'default' => ['color' => 'bg-secondary', 'icon' => 'fas fa-users'],
        ];

        // Tambahkan konfigurasi untuk card "Semua Karyawan"
        $cardConfig['Semua Karyawan'] = ['color' => 'bg-info', 'icon' => 'fas fa-users'];

        // Kirim data ke view
        return view('hrd.dashboard', compact('groupedCounts', 'cardConfig', 'totalKaryawan'));
    }
}
