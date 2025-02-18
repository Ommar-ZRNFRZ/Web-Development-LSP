<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assesor extends Model
{
    use HasFactory;

    protected $table = 'assesor'; // Nama tabel di database

    protected $fillable = [
        'id_assesor',
        'name',
        'reg_met',
        'lama_mengajar'
    ];
}