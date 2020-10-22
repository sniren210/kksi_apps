<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'nama',
        'nis',
        'nisn',
        'jk',
        'tmp_lahir',
        'tgl_lahir',
        'agama',
        'anak_ke',
        'foto',
        'alamat',
        'nama_ayah',
        'nama_ibu',
        'jurusan_id',
        'kelas_id',
    ];

    public function kelas()
    {
        return $this->belongsTo('App\Models\kelas');
    }

    public function jurusan()
    {
        return $this->belongsTo('App\Models\jurusan');
    }

    // public function mapel()
    // {
    //     return $this->belongsToMany('App\Models\mapel', 'nilai_siswa');
    // }

    public function nilai_siswa()
    {
        return $this->hasMany('App\Models\nilai_siswa', 'siswa_id');
    }
    
    public function saran()
    {
        return $this->hasMany('App\Models\saran', 'siswa_id');
    }
}
