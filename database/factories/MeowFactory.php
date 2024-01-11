<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meow>
 */
class MeowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $created = fake()->dateTime();
        return [
            // 'id' => fake()->uuid(),
            'content' => fake()->text(300),
            'creation_date' => $created,
            'modification_date' => fake()->dateTimeBetween($created, 'now'),
        ];
    }
}
