<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * Class TeamController
 * チーム画面関連のController
 * @package App\Http\Controllers
 */
class TeamController
{
    /**
     * ログイン後に表示されるチーム一覧画面
     * @return View
     */
    public function index(): View
    {
        return view('team.index', [
            'title' => 'チーム一覧',
            'description' => '',
            'keywords' => 'KPT',
            'scriptVars' => [],
        ]);
    }
}
