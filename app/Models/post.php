<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $table = 'post';

    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
        'thumbnail',
        'kategori_id',
        'user_id'
    ];

    public function kategori_post()
    {
        return $this->belongsTo('App\Models\kategori_post','kategori_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\user','user_id');
    }
}
