<?php

namespace Database\Factories;

use App\Models\Players;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Players::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'First_name' => $this->faker->word,
        'Second_name' => $this->faker->word,
        'gender' => $this->faker->word,
        'Player_image' => $this->faker->word,
        'Flag_image' => $this->faker->word,
        'ranking' => $this->faker->randomDigitNotNull,
        'Points' => $this->faker->randomDigitNotNull,
        'Category' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
