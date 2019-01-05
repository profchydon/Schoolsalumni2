<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\ProjectRepository;

class ProjectController extends Controller
{
    private $project;

    /**
     * Class constructor
     */
    public function __construct(ProjectRepository $project)
    {
        $this->project = $project;
        $this->middleware('auth', ['except' => ['all' , 'sort', 'ongoingProjects', 'completedProjects']]);
    }

    public function all()
    {
        $projects = $this->project->all();

        return view('pages.projects' , ['projects' => $projects]);
    }

    public function sort()
    {
        $parameter = htmlentities(strip_tags($_GET['status']));

        if ($parameter == "Ongoing") {
            return redirect()->intended('projects/ongoing-projects');
        }elseif ($parameter == "Completed") {
            return redirect()->intended('projects/completed-projects');
        }

        // $projects = $this->project->sort($parameter);
        // return redirect()->back()->with('projects', $projects);
        // return view('pages.projects' , ['projects' => $projects]);
    }

    public function ongoingProjects()
    {
        $projects = $this->project->ongoingProjects();

        return view('pages.projects' , ['projects' => $projects]);
    }

    public function completedProjects()
    {
        $projects = $this->project->completedProjects();

        return view('pages.projects' , ['projects' => $projects]);
    }
}
