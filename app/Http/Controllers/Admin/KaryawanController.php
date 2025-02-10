<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HRD;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        $jabatan = $request->input('jabatan'); // Ambil filter jabatan, jika ada

        // Ambil data dari tabel users, admins, dan HRDs
        $usersQuery = User::query();
        $adminsQuery = Admin::query();
        $HRDsQuery = HRD::query();

        if ($jabatan) {
            // Jika ada filter jabatan, tambahkan kondisi
            $usersQuery->where('jabatan', $jabatan);
            $adminsQuery->where('jabatan', $jabatan);
            $HRDsQuery->where('jabatan', $jabatan);
        }

        $users = $usersQuery->get();
        $admins = $adminsQuery->get();
        $HRDs = $HRDsQuery->get();

        // Ambil daftar jabatan unik dari ketiga tabel
        $jabatanList = User::pluck('jabatan')
            ->merge(Admin::pluck('jabatan'))
            ->merge(HRD::pluck('jabatan'))
            ->unique()
            ->sort();

        return view('admin.karyawan.index', compact('users', 'admins', 'HRDs', 'jabatan', 'jabatanList'));
    }


    public function create()
    {
        $today = Carbon::now(+7)->format('dmy'); // Format tanggal hari ini: ddmmyy
        $prefix = 'P' . $today;

        // Cari kode terakhir di database yang dimulai dengan prefix hari ini
        $lastKode = User::where('NIK', 'like', $prefix . '%')
            ->orderBy('NIK', 'desc')
            ->first();

        if ($lastKode) {
            // Ambil angka urutan terakhir dan tambahkan 1
            $lastNumber = (int)substr($lastKode->NIK, -3); // Ambil 3 digit terakhir
            $newKode = $prefix . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            // Jika belum ada kode untuk hari ini, mulai dari 001
            $newKode = $prefix . '001';
        }

        // Kirim kode ke view
        return view('admin.karyawan.create', compact('newKode'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'NIK' => 'required',
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
        ]);

        // Simpan data user
        User::create([
            'NIK' => $request->NIK,
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            // Menyimpan kode_kasir yang baru
        ]);

        return redirect()->route('admin.karyawan.index')->with('success', 'Karyawan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.karyawan.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins,email,' . $id,
        ]);

        $karyawan = User::findOrFail($id);
        $karyawan->update($request->all());

        return redirect()->route('admin.karyawan.index')->with('success', 'Karyawan berhasil diupdate.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.karyawan.index')->with('success', 'Karyawan berhasil dihapus.');
    }

    public function print()
    {
        $users = User::all();
        return view('admin.karyawan.print', compact('users'));
    }
}
