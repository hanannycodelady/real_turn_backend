<?php

namespace Database\Factories;

use App\Models\Overview;
use Illuminate\Database\Eloquent\Factories\Factory;

class OverviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Overview::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'player_id' => $this->faker->word,
        'ranking' => $this->faker->word,
        'Category' => $this->faker->word,
        'player_image' => $this->faker->word,
        'First_name' => $this->faker->word,
        'Last_name' => $this->faker->word,
        'Height' => $this->faker->word,
        'Height' => $this->faker->word,
        'Height' => $this->faker->word,
        'Plays' => $this->faker->word,
        'age' => $this->faker->randomDigitNotNull,
        'date_of_birth' => $this->faker->word,
        'coache's_name' => $this->faker->word,
        'win_lose_ratio' => $this->faker->word,
        'current_ranking' => $this->faker->word,
        'video_url' => $this->faker->word,
        'video_description' => $this->faker->word,
        'video_order' => $this->faker->randomDigitNotNull,
        'title_year' => $this->faker->randomDigitNotNull,
        'title_image' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
