<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Post;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
  public function dashboard()
  {
    $posts = Post::all();
    $publishedLast30Days = Post::where('published', true)
      ->where('created_at', '>=', Carbon::now()->subDays(30))
      ->count();

    $activities = ActivityLog::latest()->paginate(10);

    $groupedActivities = $activities->getCollection()->groupBy(function ($activity){
      $daysAgo = (int) $activity->created_at->diffInDays(Carbon::now());

      return match (true) {
        $daysAgo === 0 => 'Hoje',
        $daysAgo === 1 => 'Ontem',
        default => $daysAgo . ' dias atras'
      };
    });

    return view('admin.dashboard', [
      'posts' => $posts, 
      'publishedLast30Days' => $publishedLast30Days, 
      'groupedActivities' => $groupedActivities,
      'activities' => $activities
    ]);
  }
}