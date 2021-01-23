<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{
  public function index()
  {
      return view('home.index');
  }

  public function callback()
  {
      $user = Socialite::driver('github')->user();
      return view('home.callback', ['user' => $user]);
      # return redirect()->route('kpt');
  }
}
