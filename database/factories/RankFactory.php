<?php

namespace Database\Factories;

use App\Models\Rank;
use Illuminate\Database\Eloquent\Factories\Factory;

class RankFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rank::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'player_id' => $this->faker->randomDigitNotNull,
        'rank' => $this->faker->randomDigitNotNull,
        'ranking_date' => $this->faker->word,
        'previous_rank' => $this->faker->randomDigitNotNull,
        'single_career_highest_rank' => $this->faker->randomDigitNotNull,
        'single_career_highest_date' => $this->faker->word,
        'double_career_highest_rank' => $this->faker->randomDigitNotNull,
        'double_career_highest_date' => $this->faker->word,
        'mixed_doubles_highest_rank' => $this->faker->randomDigitNotNull,
        'mixed_doubles_highest_date' => $this->faker->word,
        'year' => $this->faker->randomDigitNotNull,
        'year_start_rank' => $this->faker->randomDigitNotNull,
        'year_end_rank' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
