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

    public function kelas()
    {
        return $this->belongsTo('App\Models\kelas', 'kelas_id');
    }
    public function mapel()
    {
        return $this->belongsTo('App\Models\mapel', 'mapel_id');
    }
}
