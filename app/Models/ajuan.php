<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ajuan extends Model
{
    use HasFactory;

    protected $table = 'ajuan';

    protected $fillable = [
        'judul',
        'deskripsi',
        'thumbnail',
        'tanggal',
        'kategori_id'
    ];

    public function kategori_post()
    {
        return $this->belongsTo('App\Models\kategori_post','kategori_id');
    }
}
