<?php

namespace Database\Factories;

use App\Models\tickets;
use Illuminate\Database\Eloquent\Factories\Factory;

class ticketsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tickets::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'calendar_id' => $this->faker->randomDigitNotNull,
        'ticket_type' => $this->faker->word,
        'price' => $this->faker->word,
        'quantity' => $this->faker->randomDigitNotNull,
        'available_tickets' => $this->faker->randomDigitNotNull,
        'sold_tickets' => $this->faker->randomDigitNotNull,
        'currency' => $this->faker->word,
        'status' => $this->faker->word,
        'is_available' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
