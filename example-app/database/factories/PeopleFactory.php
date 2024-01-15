<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this -> faker -> name(),
            'surname' => $this -> faker -> lastName(),
            'email' => $this -> faker -> email(),
            'phone' => $this -> faker -> phoneNumber()
        ];
    }
}
