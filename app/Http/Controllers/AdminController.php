<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function dashboard()
  {
    $posts = Post::all();
    $publishedLast30Days = Post::where('published', true)
      ->where('created_at', '>=', Carbon::now()->subDays(30))
      ->count();

    $recentActivities = ActivityLog::all();

    return view('admin.dashboard', ['posts' => $posts, 'publishedLast30Days' => $publishedLast30Days, 'recentActivities' => $recentActivities]);
  }
}