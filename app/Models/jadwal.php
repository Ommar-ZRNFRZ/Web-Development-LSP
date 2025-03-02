<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'siswa'; // Nama tabel di database

    protected $fillable = [
        'nis',
        'id_assessor',
        'id_skema',
        'tanggal',
        'tempat'
    ];
}
