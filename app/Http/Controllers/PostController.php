<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
    $recentPosts = Post::latest()->take(6)->get();
    $mostReadPosts = Post::orderBy('views', 'DESC')->take(4)->get();

    return view('posts.index', [
      'recentPosts' => $recentPosts,
      'mostReadPosts' => $mostReadPosts
    ]);
  }
}