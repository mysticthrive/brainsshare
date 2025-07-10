<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\ActivityLog;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
  public function dashboard()
  {
    $posts = $this->getPaginatedPosts();
    $activities = $this->getPaginatedActivities();
    $groupedActivities = $this->groupActivitiesByDate($activities->getCollection());
    $statistics = $this->getStatistics();
    $popularCategories =  $this->getPopularCategories();

    return view('admin.dashboard', compact('posts', 'statistics', 'groupedActivities', 'activities', 'popularCategories'));
  }

  private function getPaginatedPosts()
  {
    return Post::latest()->paginate(10, ['*'], 'postsPage');
  }

  private function getPaginatedActivities()
  {
    return ActivityLog::latest()->paginate(10, ['*'], 'activitiesPage');
  }

  private function groupActivitiesByDate($activitiesCollection)
  {
    return $activitiesCollection->groupBy(function ($activity) {
      $daysAgo = (int) $activity->created_at->diffInDays(Carbon::now());

      return match (true) {
        $daysAgo === 0 => 'Hoje',
        $daysAgo === 1 => 'Ontem',
        default => "{$daysAgo} dias atrás"
      };
    });
  }

  private function getPopularCategories()
  {
    return Category::withCount('posts')
      ->orderByDesc('posts_count')
      ->take(5)
      ->get();
  }

  private function getStatistics(): array
  {
    $thirtyDaysAgo = now()->subDays(30);

    return [
      'totalPosts' => Post::count(),
      'totalViews' => Post::sum('views'),
      'publishedLast30Days' => Post::where('published', true)->where('created_at', '>=', $thirtyDaysAgo)->count(),
    ];
  }
}