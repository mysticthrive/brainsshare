<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use App\Traits\LogsActivity;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
  use LogsActivity;

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
    $post->increment('views');
    $relatedPosts = $post->related();

    return view('posts.show', compact('post', 'relatedPosts'));
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
    $attributes = $this->prepareAttributes($request);

    $post = Auth::user()->posts()->create(Arr::except($attributes, 'tags'));
    $post->addTags($request->tags);

    $this->logActivity('Post publicado', $post);

    return redirect('/admin/dashboard?tab=posts');
  }

  public function edit(Post $post)
  {
    $categories = Category::all();
    return view('posts.edit', ['post' => $post, 'categories' => $categories]);
  }

  /**
    * @param \Illuminate\Http\Request $request
  */
  public function update(PostRequest $request, Post $post)
  {
    $attributes = $this->prepareAttributes($request, $post);

    $post->update(Arr::except($attributes, 'tags'));
    $post->syncTags($request->tags);

    $this->logActivity('Post atualizado', $post);

    return redirect('/admin/dashboard?tab=posts');
  }

  public function destroy(Post $post)
  {
    $post->delete();

    $this->logActivity('Post deletado', $post);

    return redirect('/admin/dashboard?tab=posts');
  }

  /**
    * @param \Illuminate\Http\Request $request
  */
  private function prepareAttributes(PostRequest $request, ?Post $post = null)
  {
    $attributes = $request->validated();
    
    $attributes['slug'] = Str::slug($attributes['title']);

    $attributes['published'] = $request->has('published');
    $attributes['featured'] = $request->has('featured');
    $attributes['image'] = $this->handleImageUpload($request, $post);

    if (empty($attributes['excerpt'])) {
      $attributes['excerpt'] = Str::limit(strip_tags($attributes['content']), 150);
    }

    return $attributes;
  }

  /**
    * @param \Illuminate\Http\Request $request
  */
  private function handleImageUpload(PostRequest $request, ?Post $post = null){
    if($request->hasFile('image')){
      if($post && $post->image){
        Storage::delete($post->image);
      }

      return $request->file('image')->store('posts', 'public');
    }

    return $post->image ?? null;
  }
}