<?php

namespace App\Traits;

use App\Models\Activity;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

trait LogsActivity
{
    public function logActivity(string $action, string $description, $subject = null)
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => $action,
            'description' =>Auth::user()->name . ' ' . $description . ' "' . $subject->title . '"',
            'subject_id'  => $subject?->id,
            'subject_type'=> $subject ? get_class($subject) : null,
        ]);
    }
}
