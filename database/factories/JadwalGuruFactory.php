<?php

namespace Database\Factories;

use App\Models\jadwal_guru;
use Illuminate\Database\Eloquent\Factories\Factory;

class jadwal_guruFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = jadwal_guru::class;

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
