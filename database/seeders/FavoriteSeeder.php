<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Favorite;
use App\Models\User;
use App\Models\Song;

class FavoriteSeeder extends Seeder
{
    public function run()
    {
        User::all()->each(function ($user) {
            Favorite::factory(3)->create([
                'user_id' => $user->id,
                'favoritable_id' => Song::inRandomOrder()->first()->id,
                'favoritable_type' => Song::class,
            ]);
        });
    }
}
