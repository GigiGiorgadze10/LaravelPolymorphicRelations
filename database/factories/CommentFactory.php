<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition()
    {
        return [
            'content' => $this->faker->paragraph,
            'commentable_id' => 1, // Placeholder, update in seeder
            'commentable_type' => \App\Models\Song::class, // Default type, can vary
        ];
    }
}

