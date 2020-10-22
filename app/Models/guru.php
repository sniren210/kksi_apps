<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable = [
        'nama',
        'nip',
        'npwp',
        'tmp_lahir',
        'tgl_lahir',
        'jk',
        'agama',
        'alamat',
        'foto',
    ];

    public function sekolah()
    {
        return $this->hasOne('App\Models\sekolah');
    }

    public function kelas()
    {
        return $this->belongsToMany('App\Models\kelas', 'wali_kelas');
    }
    
    // public function mapel()
    // {
    //     return $this->belongsToMany('App\Models\mapel', 'jadwal_guru');
    // }

    public function jadwal_guru()
    {
        return $this->hasMany('App\Models\jadwal_guru', 'guru_id');
    }
}
