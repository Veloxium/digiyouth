<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;
    protected $table = 'project_category';

    protected $fillable = [
        'category_name',
        'description'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class, 'category_id');
    }
}
