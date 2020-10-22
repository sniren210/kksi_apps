<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable = ['kelas','sub_kelas'];

    public function siswa()
    {
        return $this->hasMany('App\Models\siswa', 'kelas_id');
    }

    public function guru()
    {
        return $this->belongsToMany('App\Models\guru', 'wali_kelas');
    }

    // public function mapel()
    // {
    //     return $this->belongsToMany('App\Models\mapel', 'jadwal_kelas');
    // }

    public function jadwal_kelas()
    {
        return $this->hasMany('App\Models\jadwal_kelas', 'kelas_id');
    }
}
