<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function dashboard()
  {
    $posts = Post::all();
    return view('admin.dashboard', ['posts' => $posts]);
  }
}
