<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Integer;

class ProjectController extends Controller
{

    /**
     * プロジェクト一覧
     *
     * @return View
     */
    public function index(): View
    {
        return view('project.index', [
            'title' => 'プロジェクトリスト',
            'description' => '',
            'keywords' => 'KPT',
            'scriptVars' => [],
        ]);
    }

    /**
     * プロジェクト
     *
     * @param Integer $id
     * @return View
     */
    public function detail(Integer $id): View
    {
        return view('project.detail', [
            'title' => 'プロジェクト',
            'description' => '',
            'keywords' => 'KPT',
            'scriptVars' => [],
        ]);
    }
}
