<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    $title = fake()->unique()->sentence(6);

    return [
      'user_id' => User::factory(),
      'title' => $title,
      'slug' => \Str::slug($title),
      'excerpt' => fake()->paragraph(2),
      'content' => fake()->text(2000),
      'views' => rand(0, 2000),
      'image' => 'https://picsum.photos/500/300'
    ];
  }
}
