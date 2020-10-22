<?php

namespace Database\Factories;

use App\Models\siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class siswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = siswa::class;

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
            'nis' => $this->faker->randomNumber($nbDigits = 8),
            'nisn' => $this->faker->randomNumber($nbDigits = 8),
            'jk' => 'Laki-laki',
            'tmp_lahir' => $this->faker->state,
            'tgl_lahir' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'agama' => 'Islam',
            'anak_ke' => 1,
            'foto' => 'siswa-default.png',
            'alamat' => $this->faker->address,
            'nama_ayah' => $this->faker->name($gender = 'male'),
            'nama_ibu' => $this->faker->name($gender = 'female'),
            'jurusan_id' => 1,
            'kelas_id' => 1,
        ];
    }
}
