<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectViews;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(string $slug): View
    {
        $sort = request()->query("sort");

        $category = ProjectCategory::get()->first(function ($c) use ($slug) {
            return Str::slug($c->category_name) === $slug;
        });

        if (!$category) {
            abort(404);
        }

        $query = Project::with("user")
            ->withCount(["likes", "views"])
            ->where("category_id", $category->id);

        if ($sort === "latest") {
            $query->orderBy("created_at", "desc");
        } elseif ($sort === "popular") {
            $query->orderBy("likes_count", "desc");
        }

        $projects = $query->get();

        $projects->loadCount("likes");

        return view(
            "guest.category.index",
            compact("slug", "category", "projects", "sort")
        );
    }

    public function detail(string $slug, int $id): View
    {

        $user = Auth::user();

        $project = Project::with([
            'user',
            'category',
            'likes',
            'comments.user',
            'comments.replies.user',
            'comments.likes',
            'comments.replies.likes',
            /* 'comments.replies' => fn($q) => $q->latest(), */
        ])->withCount('likes')->findOrFail($id);

        if (Str::slug($project->category->category_name) !== $slug) {
            abort(404);
        }

        $viewed = session()->get('viewed_projects', []);

        if (!in_array($project->id, $viewed)) {
            ProjectViews::create([
                'project_id' => $project->id,
            ]);

            session()->push('viewed_projects', $project->id);
        }

        $totalViews = ProjectViews::where('project_id', $project->id)->count();


        return view("guest.category.detail", compact('project', 'user', 'totalViews'));
    }

    public function like(Project $project): RedirectResponse
    {
        $user = Auth::user();
        if (!$user) {
            return redirect('/authentication/login');
        }

        $project->likes()->toggle($user->id);
        return back()->with('message', 'Project disukai!');
    }


    public function comment(Request $request, $projectId): RedirectResponse
    {
        $request->validate([
            'content' => 'required',
            'parent_id' => 'nullable|exists:comments,id'
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'project_id' => $projectId,
            'content' => $request->content,
            'parent_id' => $request->parent_id,
        ]);
        return back();
    }


    public function commentLike(Comment $comment): RedirectResponse
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('/authentication/login');
        }
        $comment->likes()->toggle($user->id);
        return back()->with('message', 'komentar disukai!');
    }
}
