<?php

namespace Database\Factories;

use App\Models\User_registration;
use Illuminate\Database\Eloquent\Factories\Factory;

class User_registrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User_registration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'First_name' => $this->faker->word,
        'Last_name' => $this->faker->word,
        'Email_address' => $this->faker->word,
        'password' => $this->faker->word,
        'Contact' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
