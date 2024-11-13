<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title = $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'published_at' => random_int(0, 2)
                ? $this->faker->dateTimeBetween('-1 month', '+1 months')
                : null,
            'summary' => $this->faker->text(50),
            'slug' => trim(strtolower(str_replace(' ', '_', $title))),
            'status' => $this->faker->randomElement(['published', 'draft', 'pending','archived']),
            'reading_time' => $this->faker->numberBetween(0, 1000),
        ];
    }
}
