<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{
    public function index(): View
    {
        $loginUrl = route('login.github');
        return view('home.index', [
            'title' => 'Login',
            'description' => '',
            'keywords' => 'KPT',
            'scriptVars' => [
                'loginUrl' => $loginUrl
            ],
        ]);
    }

    public function callback()
    {
        $user = Socialite::driver('github')->user();
        return view('home.callback', ['user' => $user]);
        # return redirect()->route('kpt');
    }

    public function logout(): View
    {
        return view('home.logout', [
            'title' => 'Logout',
            'description' => '',
            'keywords' => 'KPT',
            'scriptVars' => [
                'logoutMessage' => 'Logoutしました'
            ],
        ]);
    }
}
