<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $table = 'event';

    protected $fillable = [
        'nama',
        'deskripsi',
        'foto',
        'tanggal'
    ];

    public function saran()
    {
        return $this->hasMany('App\Models\saran', 'event_id');
    }
}
