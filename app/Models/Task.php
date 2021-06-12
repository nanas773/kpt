<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'state',
        'content',
        'project_id',
        'problem_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function problem()
    {
        return $this->belongsTo(Problem::class);
    }
}
