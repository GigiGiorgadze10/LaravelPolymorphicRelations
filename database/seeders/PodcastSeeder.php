<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Podcast;

class PodcastSeeder extends Seeder
{
    public function run()
    {
        Podcast::factory(10)->create(); // Generate 10 podcasts
    }
}
