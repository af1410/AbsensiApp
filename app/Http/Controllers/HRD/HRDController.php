<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HRD;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HRDController extends Controller
{
    public function index()
    {
        $HRDs = HRD::all();
        return view('hrd.HRD.index', compact('HRDs'));
    }

    public function create()
    {
        $today = Carbon::now(+7)->format('dmy'); // Format tanggal hari ini: ddmmyy
        $prefix = 'H' . $today;

        // Cari kode terakhir di database yang dimulai dengan prefix hari ini
        $lastKode = HRD::where('NIK', 'like', $prefix . '%')
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
        return view('hrd.HRD.create', compact('newKode'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'NIK' => 'required',
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:hrd',
            'password' => 'required',
        ]);

        // Simpan data HRD
        HRD::create([
            'NIK' => $request->NIK,
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            // Menyimpan kode_kasir yang baru
        ]);

        return redirect()->route('hrd.HRD.index')->with('success', 'HRD berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $HRD = HRD::findOrFail($id);
        return view('hrd.HRD.edit', compact('HRD'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'NIK' => 'required',
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:hrd,email,' . $id,
            'password' => 'nullable|string|min:8', // Password opsional
        ]);

        $HRD = HRD::findOrFail($id);

        // Update data HRD kecuali password
        $HRD->update([
            'NIK' => $request->NIK,
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
        ]);

        // Update password jika diisi
        if ($request->filled('password')) {
            $HRD->update([
                'password' => bcrypt($request->password),
            ]);
        }

        return redirect()->route('hrd.HRD.index')->with('success', 'HRD berhasil diupdate.');
    }


    public function destroy($id)
    {
        $HRD = HRD::findOrFail($id);
        $HRD->delete();

        return redirect()->route('hrd.HRD.index')->with('success', 'HRD berhasil dihapus.');
    }

    public function print()
    {
        $HRDs = HRD::all();
        return view('hrd.HRD.print', compact('HRDs'));
    }
}
