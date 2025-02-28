<?php

namespace Database\Factories;

use App\Models\stats;
use Illuminate\Database\Eloquent\Factories\Factory;

class statsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = stats::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'player_id' => $this->faker->randomDigitNotNull,
        'match_played' => $this->faker->randomDigitNotNull,
        'match_won' => $this->faker->randomDigitNotNull,
        'match_lost' => $this->faker->randomDigitNotNull,
        'aces' => $this->faker->randomDigitNotNull,
        'double_faults' => $this->faker->randomDigitNotNull,
        'First_serve_percentage' => $this->faker->randomDigitNotNull,
        'First_serve_percentage_won' => $this->faker->word,
        'First_serve_points_won' => $this->faker->word,
        'second_serve_points_won' => $this->faker->word,
        'break_points_saved' => $this->faker->word,
        'service_game_won' => $this->faker->word,
        'service_points_won' => $this->faker->word,
        'return_point_won' => $this->faker->word,
        'break_points_converted' => $this->faker->word,
        'return_ponts_won' => $this->faker->word,
        'total_points' => $this->faker->word,
        'tournaments_played' => $this->faker->randomDigitNotNull,
        'winning_on_first_serve' => $this->faker->word,
        'winninning' => $this->faker->word,
        'rank' => $this->faker->randomDigitNotNull,
        'second_return_points_won' => $this->faker->word,
        'return_games_played' => $this->faker->word,
        'year' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
