<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
    $recentPosts = Post::latest()
      ->take(6)
      ->get();

    $mostReadPosts = Post::orderBy('views', 'DESC')
      ->take(4)
      ->get();
      
    $tags = Tag::all();

    return view('posts.index', compact('recentPosts', 'mostReadPosts', 'tags'));
  }

  public function show(Post $post){
    return view('posts.show', compact('post'));
  }

  public function create()
  {
    $categories = Category::all();
    return view('posts.create', compact('categories'));
  }
}