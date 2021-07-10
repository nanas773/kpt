<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Problem;

class ProblemController extends Controller
{

    public function index()
    {
        $problems = Problem::orderBy('created_at', 'desc')->get();
        return response()->json($problems->toJson());
    }

    public function store(Request $request)
    {
        $project_id = $request->input('project_id');
        $problem = Problem::create($request->toArray());

        return response()->json('created problem');
    }
}
