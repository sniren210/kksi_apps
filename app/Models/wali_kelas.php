<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wali_kelas extends Model
{
    use HasFactory;

    protected $table = 'wali_kelas';

    protected $fillable = ['guru_id', 'kelas_id'];
}
