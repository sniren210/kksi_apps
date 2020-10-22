<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AjuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Ajuan::factory(5)->create();
    }
}
