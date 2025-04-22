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

  public function User(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  public function Tags(): BelongsToMany
  {
    return $this->belongsToMany(Tag::class);
  }
}