<?php

namespace Database\Factories;

use App\Models\event;
use Illuminate\Database\Eloquent\Factories\Factory;

class eventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nama' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'deskripsi' => $this->faker->paragraph($nbSentences = 2, $variableNbSentences = true),
            'foto' => 'event-default.png',
            'tanggal' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
