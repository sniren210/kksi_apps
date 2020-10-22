<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    use HasFactory;

    protected $table = 'mapel';

    protected $fillable = ['nama', 'singkatan','jenis_mapel', 'kkm'];

    // public function siswa()
    // {
    //     return $this->belongsToMany('App\Models\siswa', 'nilai_siswa');
    // }

    // public function guru()
    // {
    //     return $this->belongsToMany('App\Models\guru', 'jadwal_guru');
    // }
    // public function kelas()
    // {
    //     return $this->belongsToMany('App\Models\kelas', 'jadwal_kelas');

    // }
    // public function ruang()
    // {
    //     return $this->belongsToMany('App\Models\ruang', 'jadwal_ruang');
    // }

    public function jadwal_guru()
    {
        return $this->hasMany('App\Models\jadwal_guru', 'mapel_id');
    }
    public function jadwal_ruang()
    {
        return $this->hasMany('App\Models\jadwal_ruang', 'mapel_id');
    }
    public function jadwal_kelas()
    {
        return $this->hasMany('App\Models\jadwal_kelas', 'mapel_id');
    }
    public function nilai_siswa()
    {
        return $this->hasMany('App\Models\nilai_siswa', 'mapel_id');
    }
}
