<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table = 'absensi';

    protected $fillable = [
        'NIK',
        'name',
        'jabatan',
        'tanggal',
        'jam',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'NIK', 'NIK');
    }
}
