<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AjuanSeeder::class,
            EventSeeder::class,
            GuruSeeder::class,
            PostSeeder::class,
            SiswaSeeder::class,
            JadwalGuruSeeder::class,
            JadwalKelasSeeder::class,
            JadwalRuangSeeder::class,
            JurusanSeeder::class,
            KategoriPostSeeder::class,
            KelasSeeder::class,
            MapelSeeder::class,
            NilaiSiswaSeeder::class,
            RuangSeeder::class,
            SaranSeeder::class,
            SekolahSeeder::class,
            WaliKelasSeeder::class,
        ]);
    }
}
