<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\UserRepository;
use App\Http\Repositories\ProjectRepository;
use Auth;
use Session;

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

    //
    public function createUserProjectLoggedIn(Request $request)
    {

      $createProject = $this->project->create($request);

      if ($createProject) {
          // return redirect()->back()->with('message', 'Congrats... Your project was succesfully created');
          Session::put('project_id' , $createProject->id);
          Session::put('project_title' , $createProject->title);
          return view('pages.imageupload');
      }elseif (!$createProject) {
          return redirect()->back()->with('error', 'Oops! Sorry there was an error, Please try again');
      }

    }

    public function dashboard()
    {

        $projects = $this->project->getUserProjects(Auth::user()->id);

        return view('pages.dashboard', ['projects' => $projects]);

    }


}
