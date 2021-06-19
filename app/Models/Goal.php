<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'limit_date',
        'is_completed',
        'project_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
