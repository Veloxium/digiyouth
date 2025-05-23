<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\View\View;

class HomepageController extends Controller
{
    public function index(): View
    {
        $weekAgo = Carbon::now()->subDays(7);

        $popularProjects = Project::with('user', 'category')
            ->withCount(['likes' => function ($query) use ($weekAgo) {
                $query->where('project_likes.created_at', '>=', $weekAgo);
            }, 'views'])
            ->orderByDesc('likes_count')
            ->limit(10)
            ->get();


        $topContributors = User::whereHas('projects.likes', function ($query) use ($weekAgo) {
            $query->where('project_likes.created_at', '>=', $weekAgo);
        })
            ->withCount(['projects as total_likes' => function ($query) use ($weekAgo) {
                $query->withCount(['likes as recent_likes_count' => function ($likeQuery) use ($weekAgo) {
                    $likeQuery->where('project_likes.created_at', '>=', $weekAgo);
                }]);
            }])
            ->get()
            ->sortByDesc(fn($user) => $user->projects->sum('recent_likes_count'))
            ->take(10);
        return view('homepage', compact('popularProjects', 'topContributors'));
    }
}
