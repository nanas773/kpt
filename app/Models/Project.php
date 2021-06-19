<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'team_id',
    ];

    public function team()
    {
        return $this->belongsTo('App\Models\Team');
    }

    public function problems()
    {
        return $this->hasMany('App\Models\Problem');
    }
}
