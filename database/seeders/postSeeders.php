<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class postSeeders extends Seeder
{
    public function run(): void
    {
        Post::factory(20)->create();
    }
}