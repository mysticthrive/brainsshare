<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

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

  public function store(Request $request){
    $attributes = $request->validate([
      'title' => ['required'],
      'excerpt' => ['nullable'],
      'category_id' => ['required'],
      'tags' => ['string', 'regex:/^[a-zA-Z0-9áéíóúãõâêôçÁÉÍÓÚÃÕÂÊÔÇ\-\s,]+$/'],
      'image' => ['required', 'image', File::types(['jpg', 'webp'])],
      'content' => ['required']
    ]);

    $attributes['slug'] = Str::slug($attributes['title']);
    $attributes['published'] = $request->has('published');
    $attributes['image'] = $request->image->store('posts');

    $post = Auth::user()->posts()->create(Arr::except($attributes, 'tags'));
    $post->addTags($request->tags);

    return redirect('/');
  }
}