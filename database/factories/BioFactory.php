<?php

namespace Database\Factories;

use App\Models\Bio;
use Illuminate\Database\Eloquent\Factories\Factory;

class BioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'player_id' => $this->faker->randomDigitNotNull,
        'more_about_player' => $this->faker->word,
        'sub_heading' => $this->faker->word,
        'paragraph' => $this->faker->text,
        'Career' => $this->faker->word,
        'sub_heading' => $this->faker->word,
        'paragraph' => $this->faker->text,
        'career' => $this->faker->word,
        'paragraph' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
