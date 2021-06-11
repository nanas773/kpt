<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'is_resolved',
        'project_id',
    ];

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
}
