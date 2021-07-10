<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * Class UserController
 * ユーザー管理画面関連のController
 * @package App\Http\Controllers
 */
class UserController
{
    public function info(): View
    {
        return view('user.info', [
            'title' => 'ユーザー情報',
            'description' => '',
            'keywords' => 'KPT',
            'scriptVars' => [],
        ]);
    }

    public function edit(): View
    {
        return view('user.edit', [
            'title' => 'ユーザー情報編集',
            'description' => '',
            'keywords' => 'KPT',
            'scriptVars' => [],
        ]);
    }
}
