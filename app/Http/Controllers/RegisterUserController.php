<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
  public function create()
  {
    return view('auth.register');
  }

  public function store(Request $request)
  {
    $attributes = $request->validate([
      'name' => ['required'],
      'email' => ['required', 'email', 'unique:users,email'],
      'password' => ['required', 'confirmed', Password::min(6)]
    ]);

    $user = User::create($attributes);

    Auth::login($user);

    return redirect('/');
  }
}
