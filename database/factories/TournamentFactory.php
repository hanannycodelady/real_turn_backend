<?php

namespace Database\Factories;

use App\Models\Tournament;
use Illuminate\Database\Eloquent\Factories\Factory;

class TournamentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tournament::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Tournament_name' => $this->faker->word,
        'tournament_category' => $this->faker->word,
        'Start_date' => $this->faker->word,
        'end_date' => $this->faker->word,
        'Venue' => $this->faker->word,
        'Location' => $this->faker->word,
        'surface' => $this->faker->word,
        'Prize_money' => $this->faker->word,
        'certificate' => $this->faker->word,
        'status' => $this->faker->word,
        'sponsor_name' => $this->faker->word,
        'Draw_size' => $this->faker->randomDigitNotNull,
        'Tournament_logo' => $this->faker->word,
        'Tournament_director' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
