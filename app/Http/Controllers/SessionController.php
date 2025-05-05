<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
  public function create()
  {
    return view('auth.login');
  }

  public function store(Request $request)
  {
    $attibutes = $request->validate([
      'email' => ['required', 'email', 'exists:users,email'],
      'password' => ['required']
    ]);

    if(!Auth::attempt($attibutes)){
      throw ValidationException::withMessages([
        'email' => 'Dados incorretos'
      ]);
    }

    request()->session()->regenerate();

    return redirect('/');
  }
}
