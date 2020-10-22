<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_guru extends Model
{
    use HasFactory;

    protected $table = 'jadwal_guru';

    protected $fillable = [
        'guru_id',
        'mapel_id',
        'jam_ke',
    ];

    public function guru()
    {
        return $this->belongsTo('App\Models\guru', 'guru_id');
    }
    public function mapel()
    {
        return $this->belongsTo('App\Models\mapel', 'mapel_id');
    }
}
