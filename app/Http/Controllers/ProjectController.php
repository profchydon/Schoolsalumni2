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
        $this->middleware('auth', ['except' => ['all']]);
    }

    public function all()
    {
        $projects = $this->project->all();

        return view('pages.projects' , ['projects' => $projects]);
    }
}
