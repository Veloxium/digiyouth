<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectViews extends Model
{
    protected $fillable = ['project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
