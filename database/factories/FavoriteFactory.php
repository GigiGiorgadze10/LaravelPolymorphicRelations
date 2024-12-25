<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FavoriteFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(), // Link to a User
            'favoritable_id' => 1, // Placeholder, update in seeder
            'favoritable_type' => \App\Models\Song::class, // Default type, can vary
        ];
    }
}

