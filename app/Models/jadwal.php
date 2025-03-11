<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal'; // Nama tabel di database

    protected $fillable = [
        'id_siswa',
        'id_assesor',
        'id_skema',
        'tanggal',
        'tempat'
    ];
}
