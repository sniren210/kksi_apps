<?php

namespace Database\Factories;

use App\Models\jadwal_ruang;
use Illuminate\Database\Eloquent\Factories\Factory;

class jadwal_ruangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = jadwal_ruang::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'guru_id' => 1,
            'mapel_id' => 1,
            'jam_ke' => 1,
        ];
    }
}
