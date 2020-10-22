<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saran extends Model
{
    use HasFactory;

    protected $table = 'saran';

    protected $fillable = [        
        'siswa_id',
        'event_id',
        'deskripsi'
    ];

    public function siswa()
    {
        return $this->belongsTo('App\Models\siswa', 'siswa_id');
    }
    public function event()
    {
        return $this->belongsTo('App\Models\event', 'event_id');
    }


}
