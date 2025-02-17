<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
        ];
    }
}

