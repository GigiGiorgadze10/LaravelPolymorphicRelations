<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    public function run()
    {
        Album::factory(5)->create(); // Generate 5 albums
    }
}
