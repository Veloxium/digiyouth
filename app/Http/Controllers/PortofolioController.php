<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PortofolioController extends Controller
{

    public function index(): View
    {
        $user = Auth::user();
        $sort = request()->query('sort');

        $getProjects = User::with(['projects.category'])->find(Auth::id());
        $projects = $getProjects->projects;


        $projects->loadCount(['likes', 'views']);

        $totalLikes = $projects->sum('likes_count');
        $totalViews = $projects->sum('views_count');
        $totalProjects = $projects->count();

        if ($sort === 'latest') {
            $projects = $projects->sortByDesc('created_at');
        } elseif ($sort === 'popular') {
            $projects = $projects->sortByDesc('likes_count');
        }
        return view('guest.portofolio.index', compact('user', 'projects', 'totalLikes', 'totalProjects', 'totalViews'));
    }

    public function upload(): View
    {
        $user = Auth::user();
        $categories = ProjectCategory::all();
        return view('guest.portofolio.upload', compact('user', 'categories'));
    }


    public function tracking(): View
    {
        $user = Auth::user();
        return view('guest.portofolio.tracking', compact('user'));
    }

    public function statistic($id) : View
    {
        $project = Project::withCount(['likes', 'comments'])
            ->findOrFail($id);


        $totalViews = DB::table('project_views')->where('project_id', $id)->count();

        $viewsPerMonth = DB::table('project_views')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->where('project_id', $id)
            ->whereBetween('created_at', [now()->subYear(), now()])
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $viewsData = [];
        for ($m = 1; $m <= 12; $m++) {
            $viewsData[] = $viewsPerMonth[$m] ?? 0;
        }

        $totalLikes = $project->likes_count;
        $totalComments = $project->comments_count;

        return view('guest.portofolio.statistic', compact(
            'project',
            'totalViews',
            'totalLikes',
            'totalComments',
            'viewsData'
        ));
    }

    public function detail(string $id): View
    {
        return view('guest.portofolio.detail');
    }



    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string|max:100',
            'project_title' => 'required|string|max:255',
            'description' => 'required|string',
            'creator' => 'required|string|max:255',
            'team' => 'nullable|string|max:255',
            'project_tools' => 'nullable|string|max:255',
            'project_link' => 'nullable|url|max:255',
            'category_id' => 'required|exists:project_category,id',
            'project_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('project_picture')) {
            $image = $request->file('project_picture');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/user/projects', $imageName);
            $validated['project_picture'] = $imageName;
        }

        $validated['user_id'] = Auth::id();

        Project::create($validated);
        return redirect()->intended('/portofolio')->with('success', 'Project berhasil disimpan!');
    }
}
