<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeepController extends Controller
{

    public function index()
    {
        //TODO: Keep 一覧を取得して返すようにする
        return response()->json('Hello');
    }

    public function store(Request $request)
    {
        $project_id = $request->input('project_id');
        $keep = \App\Models\Task::create($request->toArray());

        return response()->json('created keep');
    }
}
