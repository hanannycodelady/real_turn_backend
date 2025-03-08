<?php

namespace Database\Factories;

use App\Models\communities;
use Illuminate\Database\Eloquent\Factories\Factory;

class communitiesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = communities::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'community_name' => $this->faker->word,
        'venue_location' => $this->faker->word,
        'community_description' => $this->faker->text,
        'community_image' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
