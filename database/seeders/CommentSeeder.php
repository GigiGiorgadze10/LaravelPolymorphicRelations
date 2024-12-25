<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Song;

class CommentSeeder extends Seeder
{
    public function run()
    {
        // Attach comments to random songs
        Song::all()->each(function ($song) {
            Comment::factory(5)->create([
                'commentable_id' => $song->id,
                'commentable_type' => Song::class,
            ]);
        });
    }
}
