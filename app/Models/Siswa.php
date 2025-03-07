<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa'; // Pastikan sesuai dengan nama tabel di database
    protected $primaryKey = 'id'; // Pastikan ini sesuai dengan primary key tabel

    protected $fillable = [
        'nis',
        'name',
        'class',
        'major'
    ];

    public $timestamps = false; // Matikan timestamps jika tabel tidak memiliki created_at dan updated_at
}
