<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    public function subject(){
      return $this->morphTo();
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
