<?php

namespace Database\Factories;

use App\Models\coach_bio;
use Illuminate\Database\Eloquent\Factories\Factory;

class coach_bioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = coach_bio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'heading' => $this->faker->word,
        'content' => $this->faker->text,
        'heading' => $this->faker->word,
        'content' => $this->faker->text,
        'heading' => $this->faker->word,
        'content' => $this->faker->text,
        'heading' => $this->faker->word,
        'content' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
