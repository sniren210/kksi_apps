<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    use HasFactory;

    protected $table = 'sekolah';

    protected $fillable = [
        'nama',
        'nss',
        'npsn',
        'prov',
        'kab',
        'kec',
        'desa',
        'jln',
        'kd_pos',
        'akreditas',
        'th_akreditas',
        'jml_guru',
        'th_berdiri',
        'guru_id',
    ];

    public function guru()
    {
        return $this->belongsTo('App\Models\guru');
    }
}
