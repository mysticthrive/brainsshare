<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
  use HasFactory;

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }

  public function tags(): BelongsToMany
  {
    return $this->belongsToMany(Tag::class);
  }

  public function related(int $limit = 3)
  {
    return Post::query()
      ->where(function($query) {
        $query->whereHas('tags', function($q) {
          $q->whereIn('tags.id', $this->tags->pluck('id'));
        })
        ->orWhere('category_id', $this->category_id);
      })
      ->where('id', '!=', $this->id)
      ->where('published', true)
      ->latest()
      ->take($limit)
      ->get();
  }

  public function scopeMostViewedThisWeek($query, int $limit = 4)
  {
    return $query->where('published', true)
              ->whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])
              ->orderByDesc('views')
              ->take($limit);
  }
}