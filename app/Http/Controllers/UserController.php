<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\UserRepository;
use App\Http\Repositories\ProjectRepository;
use Auth;

class UserController extends Controller
{


    private $user;

    private $project;

    /**
     * Class constructor
     */
    public function __construct(UserRepository $user, ProjectRepository $project)
    {
        // Inject UserRepository Class into UserController
        $this->user = $user;
        $this->project = $project;

        $this->middleware('auth', ['except' => ['createUserProject']]);

    }

    //
    public function createUserProject(Request $request)
    {

      $user = $this->user->createUserProject($request);

      if ($user) {

        $projects = $this->project->getUserProjects($user->id);

        return redirect()->intended('dashboard');

      }else {
        return redirect()->intended('create');
      }

    }

    public function dashboard()
    {

        $projects = $this->project->getUserProjects(Auth::user()->id);

        return view('dashboard', ['projects' => $projects]);

    }
}
