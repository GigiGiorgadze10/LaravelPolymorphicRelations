<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PodcastFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'genre' => $this->faker->word,
        ];
    }
}

