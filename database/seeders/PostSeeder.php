<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $tags = Tag::factory(3)->create();

      Post::factory(12)
        ->hasAttached($tags)
        ->create(
          fn () => [
            'featured' => $featured = fake()->boolean(40),
            'published' => $featured || fake()->boolean(60)
          ]
        );
    }
}
