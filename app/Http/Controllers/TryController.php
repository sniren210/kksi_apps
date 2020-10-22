<?php

namespace App\Http\Controllers;

use App\Models\ajuan;
use App\Models\event;
use App\Models\guru;
use App\Models\jadwal_guru;
use App\Models\jadwal_kelas;
use App\Models\jadwal_ruang;
use App\Models\kelas;
use App\Models\mapel;
use App\Models\nilai_siswa;
use App\Models\saran;
use App\Models\sekolah;
use App\Models\siswa;
use Illuminate\Http\Request;

class TryController extends Controller
{
    //
    public function index()
    {
        $data = [
            'siswa' => siswa::all(),
            'ajuan' => ajuan::all(),
            'event' => event::all(),
            'guru' => guru::all(),
            'jadwal_guru' => jadwal_guru::all(),
            'jadwal_kelas' => jadwal_kelas::all(),
            'jadwal_ruang' => jadwal_ruang::all(),
            'nilai_siswa' => nilai_siswa::where('mapel_id' ,2)->get(),
            'saran' => saran::all(),
            'kelas' => kelas::all(),
            'mapel' => mapel::all(),
            'sekolah' => sekolah::all(),
        ];
        return view('try', $data);
    }
}
