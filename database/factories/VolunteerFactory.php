<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Volunteer>
 */
class VolunteerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'description' => collect($this->faker->paragraphs(mt_rand(3, 8)))->map(fn($p) => "<p>$p</p>")->implode(''),
            'location' => $this->faker->city(),
            'time' => $this->faker->dateTime()
        ];
    }
}
