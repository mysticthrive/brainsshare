<?php

namespace App\Services;

use App\Models\Tag;
use App\Models\Post;

class PostTagService
{
  public function tag(Post $post, string $name): void
  {
    $cleanName = trim($name);
    if (empty($cleanName)) {
      return;
    }

    $tag = Tag::firstOrCreate(['name' => $cleanName]);
    $post->tags()->attach($tag);
  }

  public function addTags(Post $post, ?string $tagsSubmited)
  {
    if ($tagsSubmited) {
      $tags = array_map('trim', explode(',', $tagsSubmited));

      foreach ($tags as $tag) {
        $this->tag($post, $tag);
      }
    }
  }

  public function syncTags(Post $post, ?string $tagsSubmmited)
  {
    if (!$tagsSubmmited) {
      $post->tags()->detach();
      return;
    }

    $existingTags = $post->tags->pluck('name')->toArray();
    $newTags = array_map('trim', explode(',', $tagsSubmmited));

    foreach (array_diff($newTags, $existingTags) as $tag) {
      $this->tag($post, $tag);
    }

    if ($tagsToRemove = array_diff($existingTags, $newTags)) {
      $post->tags()->detach(
        Tag::whereIn('name', $tagsToRemove)->pluck('id')
      );
    }
  }
}
