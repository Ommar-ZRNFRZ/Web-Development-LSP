<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skema extends Model
{
    use HasFactory;

    protected $table = 'skema'; // Nama tabel di database

    protected $fillable = [
        'id_skema',
        'jurusan',
        'nama_skema'
    ];
}
