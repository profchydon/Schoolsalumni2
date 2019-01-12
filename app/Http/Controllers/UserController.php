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

      $data = $this->user->createUserProject($request);

      if ($data) {

          if ($data['project']['category'] == "Group") {
              Session::put('project_id' , $data['project']['id']);
              Session::put('project_title' , $data['project']['title']);
              return view('pages.imageupload');
          }else {
              $projects = $this->project->getUserProjects($data['user']['id']);
              return redirect()->intended('dashboard');
          }

      }else {
          return redirect()->intended('create');
      }

    }

    //
    public function createUserProjectLoggedIn(Request $request)
    {

      $createProject = $this->project->create($request);

      if ($createProject) {

          if ($createProject->category == "Group") {
            Session::put('project_id' , $createProject->id);
            Session::put('project_title' , $createProject->title);
            return view('pages.imageupload');
          }else {
            return redirect()->back()->with('message', 'Congrats... Your project was succesfully created');
          }

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
