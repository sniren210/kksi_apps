<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilai_siswa extends Model
{
    use HasFactory;

    protected $table = 'nilai_siswa';

    protected $fillable = ['nilai', 'siswa_id', 'mapel_id'];

    public function siswa()
    {
        return $this->belongsTo('App\Models\siswa', 'siswa_id');
    }
    public function mapel()
    {
        return $this->belongsTo('App\Models\mapel', 'mapel_id');
    }
}
