<?php

namespace Database\Factories;

use App\Models\ajuan;
use Illuminate\Database\Eloquent\Factories\Factory;

class ajuanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ajuan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'judul' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'deskripsi' => $this->faker->paragraph($nbSentences = 2, $variableNbSentences = true),
            'thumbnail' => 'thumbnail-default.png',
            'tanggal' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'kategori_id' => 1,
        ];
    }
}
