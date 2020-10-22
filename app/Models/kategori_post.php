<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_post extends Model
{
    use HasFactory;

    protected $table = 'kategori_post';

    protected $fillable = [
        'kategori'
    ];

    public function ajuan()
    {
        return $this->hasMany('App\Models\ajuan', 'kategori_id');
    }
    public function post()
    {
        return $this->hasMany('App\Models\post', 'kategori_id');
    }
}
