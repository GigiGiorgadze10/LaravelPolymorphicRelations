<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Playlist;

class PlaylistSeeder extends Seeder
{
    public function run()
    {
        Playlist::factory(15)->create(); // Generate 15 playlists
    }
}
