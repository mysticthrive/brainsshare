<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

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

  /**
    * @param \Illuminate\Http\Request $request
  */
  public function store(PostRequest $request){
    $attributes = $request->validated();

    $attributes['slug'] = Str::slug($attributes['title']);
    $attributes['published'] = $request->has('published');
    $attributes['image'] = $request->image->store('posts');

    if (empty($attributes['excerpt'])) {
      $attributes['excerpt'] = Str::limit(strip_tags($attributes['content']), 150);
    }

    $post = Auth::user()->posts()->create(Arr::except($attributes, 'tags'));
    $post->addTags($request->tags);

    return redirect('/');
  }

  public function edit(Post $post)
  {
    $categories = Category::all();
    return view('posts.edit', ['post' => $post, 'categories' => $categories]);
  }
}