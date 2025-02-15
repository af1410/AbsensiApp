<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('hrd.admin.index', compact('admins'));
    }

    public function create()
    {
        $today = Carbon::now(+7)->format('dmy'); // Format tanggal hari ini: ddmmyy
        $prefix = 'A' . $today;

        // Cari kode terakhir di database yang dimulai dengan prefix hari ini
        $lastKode = Admin::where('NIK', 'like', $prefix . '%')
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
        return view('hrd.admin.create', compact('newKode'));
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
        Admin::create([
            'NIK' => $request->NIK,
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            // Menyimpan kode_kasir yang baru
        ]);

        return redirect()->route('admin.admin.index')->with('success', 'Admin berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('hrd.admin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins,email,' . $id,
        ]);

        $admin = Admin::findOrFail($id);
        $admin->update($request->all());

        return redirect()->route('admin.admin.index')->with('success', 'Admin berhasil diupdate.');
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.admin.index')->with('success', 'Admin berhasil dihapus.');
    }

    public function print()
    {
        $admins = Admin::all();
        return view('admin.admin.print', compact('admins'));
    }
}
