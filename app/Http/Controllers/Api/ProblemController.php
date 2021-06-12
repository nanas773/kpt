<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProblemController extends Controller
{

  function index() {
    //TODO: Problem 一覧を取得して返すようにする
    return response()->json('Hello');
  }

  function store(Request $request) {
    $project_id = $request->input('project_id');
    $problem = \App\Models\Problem::create($request->toArray());

    return response()->json('created problem');
  }
}
