<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Http\Request;
use App\Models\HRD;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

class AbsenController extends Controller
{
    public function index()
    {

        // Ambil pengguna yang sedang login
        $hrd = auth()->user();

        // Cek apakah sudah absen masuk hari ini
        $sudahAbsen = Absensi::where('NIK', $hrd->NIK)
            ->whereDate('created_at', Carbon::today())
            ->where('status', 'AbsenMasuk')
            ->exists();

        // Kirim data ke view
        return view('hrd.absen.index', compact('hrd', 'sudahAbsen'));
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
