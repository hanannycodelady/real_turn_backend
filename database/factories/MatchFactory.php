<?php

namespace Database\Factories;

use App\Models\Match;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Match::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Match_date' => $this->faker->date('Y-m-d H:i:s'),
        'opponent_First_name' => $this->faker->word,
        'opponent_last_name' => $this->faker->word,
        'Tournament' => $this->faker->word,
        'Score' => $this->faker->word,
        'match_round' => $this->faker->word,
        'Result' => $this->faker->word,
        'duration' => $this->faker->word,
        'Surface' => $this->faker->word,
        'Location' => $this->faker->word,
        'Prize_money' => $this->faker->word,
        'opponent_ranking' => $this->faker->randomDigitNotNull,
        'oppo_flage_image' => $this->faker->word,
        'oppo_country' => $this->faker->word,
        'Status' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
