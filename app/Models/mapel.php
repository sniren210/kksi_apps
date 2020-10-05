<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    use HasFactory;

    protected $table = 'mapel';

    protected $fillable = ['nama', 'jenis_mapel', 'kkm'];

    public function siswa()
    {
        return $this->belongsToMany('App\siswa', 'nilai_siswa');
    }

    public function guru()
    {
        return $this->belongsToMany('App\guru', 'jadwal_guru');
    }
    public function kelas()
    {
        return $this->belongsToMany('App\kelas', 'jadwal_kelas');

    }
    public function ruang()
    {
        return $this->belongsToMany('App\ruang', 'jadwal_ruang');
    }
}
