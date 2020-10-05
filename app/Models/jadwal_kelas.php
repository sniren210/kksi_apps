<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_kelas extends Model
{
    use HasFactory;

    protected $table = 'jadwal_kelas';

    protected $fillable = [
        'kelas_id',
        'mapel_id',
        'jam_ke',
    ];
}
