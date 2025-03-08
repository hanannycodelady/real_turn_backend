<?php

namespace Database\Factories;

use App\Models\Score;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Score::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tournament_id' => $this->faker->randomDigitNotNull,
        'stage' => $this->faker->word,
        'player1_id' => $this->faker->randomDigitNotNull,
        'player2_id' => $this->faker->randomDigitNotNull,
        'player1_score' => $this->faker->word,
        'player2_score' => $this->faker->word,
        'winner_id' => $this->faker->randomDigitNotNull,
        'round' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
