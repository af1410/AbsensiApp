<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('NIK')->nullable()->after('id');
            $table->string('jabatan')->nullable()->after('name');
            $table->string('no_hp')->nullable()->after('jabatan');
            $table->string('alamat')->nullable()->after('email');
        });

        Schema::table('HRD', function (Blueprint $table) {
            $table->string('NIK')->nullable()->after('id');
            $table->string('jabatan')->nullable()->after('name');
            $table->string('no_hp')->nullable()->after('jabatan');
            $table->string('alamat')->nullable()->after('email');
        });

        Schema::table('admins', function (Blueprint $table) {
            $table->string('NIK')->nullable()->after('id');
            $table->string('jabatan')->nullable()->after('name');
            $table->string('no_hp')->nullable()->after('jabatan');
            $table->string('alamat')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
