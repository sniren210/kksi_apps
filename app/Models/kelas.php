<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable = ['nama'];

    public function siswa()
    {
        return $this->hasMany('App\siswa', 'kelas_id');
    }

    public function guru()
    {
        return $this->belongsToMany('App\guru', 'wali_kelas');
    }

    public function mapel()
    {
        return $this->belongsToMany('App\mapel', 'jadwal_guru');
    }
}
