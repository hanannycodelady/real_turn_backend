<?php

namespace Database\Factories;

use App\Models\coach_overview;
use Illuminate\Database\Eloquent\Factories\Factory;

class coach_overviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = coach_overview::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'player_id' => $this->faker->randomDigitNotNull,
        'First_name' => $this->faker->word,
        'Last_name' => $this->faker->word,
        'profile_image' => $this->faker->word,
        'nationality' => $this->faker->word,
        'country_flag' => $this->faker->word,
        'latest_video' => $this->faker->word,
        'latest_video_description' => $this->faker->text,
        'latest_image' => $this->faker->word,
        'latest_image_description' => $this->faker->text,
        'player_name' => $this->faker->word,
        'player_image' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
