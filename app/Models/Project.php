<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'class',
        'project_title',
        'description',
        'creator',
        'team',
        'project_tools',
        'project_link',
        'project_picture',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'project_likes')->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id');
    }

    public function views()
    {
        return $this->hasMany(ProjectViews::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
