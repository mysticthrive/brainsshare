<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
  /** @use HasFactory<\Database\Factories\PostFactory> */
  use HasFactory;

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }

  public function tag(string $name): void
  {
    $cleanName = trim($name);
    if (empty($cleanName)) {
      return;
    }

    $tag = Tag::firstOrCreate(['name' => $cleanName]);
    $this->tags()->attach($tag);
  }

  public function tags(): BelongsToMany
  {
    return $this->belongsToMany(Tag::class);
  }

  public function addTags(?string $tagsSubmmited)
  {
    if ($tagsSubmmited) {
      $tags = array_map('trim', explode(',', $tagsSubmmited));

      foreach ($tags as $tag) {
        $this->tag($tag);
      }
    }
  }

  public function syncTags(?string $tagsSubmmited)
  {
    if (!$tagsSubmmited) {
      $this->tags()->detach();
      return;
    }

    $existingTags = $this->tags->pluck('name')->toArray();
    $newTags = array_map('trim', explode(',', $tagsSubmmited));

    foreach (array_diff($newTags, $existingTags) as $tag) {
      $this->tag($tag);
    }

    if ($tagsToRemove = array_diff($existingTags, $newTags)) {
      $this->tags()->detach(
        Tag::whereIn('name', $tagsToRemove)->pluck('id')
      );
    }
  }
}