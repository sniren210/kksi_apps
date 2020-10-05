<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_guru extends Model
{
    use HasFactory;

    protected $table = 'jadwal_guru';

    protected $fillable = [
        'guru_id',
        'mapel_id',
        'jam_ke',
    ];
}
