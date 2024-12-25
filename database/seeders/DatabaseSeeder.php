<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AlbumSeeder::class,
            ArtistSeeder::class,
            GenreSeeder::class,
            SongSeeder::class,
            PodcastSeeder::class,
            PlaylistSeeder::class,
            CommentSeeder::class,
            FavoriteSeeder::class,
        ]);
    }
}
