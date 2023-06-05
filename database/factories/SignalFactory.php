<?php

namespace Database\Factories;

use App\Models\Annonce;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Signal>
 */
class SignalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'count' => $this->faker->randomNumber(),
            'annonce_id' => Annonce::inRandomOrder()->first()->id,
            'created_at' => now(),
            'updated_at' => now(),
            //
        ];
    }
}