<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AbsensiController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data dari query string
        $search = $request->input('search');
        $jabatan = $request->input('jabatan');

        // Query absensi
        $query = Absensi::query();

        // Filter berdasarkan pencarian nama
        if (!empty($search)) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        // Filter berdasarkan jabatan
        if (!empty($jabatan)) {
            $query->where('jabatan', $jabatan);
        }

        // Ambil data hasil query
        $absensi = $query->get();

        // Ambil semua jabatan untuk combobox filter
        $allJabatan = Absensi::select('jabatan')->distinct()->get();

        return view('hrd.absensi.index', compact('absensi', 'search', 'jabatan', 'allJabatan'));
    }


    public function create() {}


    public function store(Request $request) {}

    public function edit($id) {}

    public function update(Request $request, $id) {}

    public function print(Request $request)
    {
        // Ambil data filter dari query string
        $search = $request->input('search');
        $jabatan = $request->input('jabatan');

        // Query absensi sama seperti di index
        $query = Absensi::query();

        // Filter berdasarkan pencarian nama
        if (!empty($search)) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        // Filter berdasarkan jabatan
        if (!empty($jabatan)) {
            $query->where('jabatan', $jabatan);
        }

        // Ambil data hasil query
        $absensi = $query->get();

        // Load view cetak dengan data yang sudah difilter
        return view('hrd.absensi.print', compact('absensi'));
    }
}
