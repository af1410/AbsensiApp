<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nik'); // NIK karyawan
            $table->string('nama'); // Nama karyawan
            $table->date('tanggal'); // Tanggal absensi
            $table->time('jam'); // Jam absensi
            $table->enum('status', ['AbsenMasuk', 'KeluarIstirahat', 'MasukIstirahat', 'AbsenPulang', 'Izin', 'Sakit']); // Status absensi
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi');
    }
}
