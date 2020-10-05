<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_ruang extends Model
{
    use HasFactory;

    protected $table = 'jadwal_ruang';

    protected $fillable = [
        'ruang_id',
        'mapel_id',
        'jam_ke',
    ];
}
