<?php

namespace Database\Factories;

use App\Models\guru;
use Illuminate\Database\Eloquent\Factories\Factory;

class guruFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = guru::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nama' => $this->faker->name(),
            'nip' => $this->faker->randomNumber($nbDigits = 8),
            'npwp' => $this->faker->randomNumber($nbDigits = 8),
            'tmp_lahir' => $this->faker->state,
            'tgl_lahir' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'jk' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat' => $this->faker->address,
            'foto' => 'guru-default.png',
        ];
    }
}
