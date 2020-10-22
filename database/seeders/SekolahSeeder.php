<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sekolah')->insert(array(
            [
                'nama' => 'SMKN 1 Majalengka',
                'nss' => 201920,
                'npsn' => 39009,
                'prov' => 'Jawa barat',
                'kab' => 'Majalengka',
                'kec' => 'Cigasong',
                'desa' => 'Cicenang',
                'jln' => 'jln raya 68',
                'kd_pos' => 202010,
                'akreditas' => 'B',
                'th_akreditas' => '2002-10-01',
                'th_berdiri' => '1989-10-01',
                'guru_id' => 1
            ]
        ));
    }
}
