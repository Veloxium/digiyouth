<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    use HasFactory;

    protected $fillable = [
        'project_id',
        'user_id',
        'content',
        'parent_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function project()
    {
        return $this->belongsTo(Project::class);
    }


    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }


    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id')->with('user', 'replies');
    }


    public function likes()
    {
        return $this->belongsToMany(User::class, 'comment_likes')->withTimestamps();
    }

    public function isLikedBy($userId)
    {
        return $this->likes()->where('user_id', $userId)->exists();
    }
}
