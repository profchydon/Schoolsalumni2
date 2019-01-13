<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\ProjectRepository;
use Auth;
use Session;

class ProjectController extends Controller
{
    private $project;

    /**
     * Class constructor
     */
    public function __construct(ProjectRepository $project)
    {
        $this->project = $project;
        $this->middleware('auth', ['except' => ['all' , 'getSchool', 'getSchoolProjects', 'getAproject', 'saveFundingTransactionDetails', 'getProjectForFunding', 'sort', 'ongoingProjects', 'completedProjects', 'uploadImage', 'insertImage']]);
    }

    public function all()
    {
        $projects = $this->project->all();

        return view('pages.projects' , ['projects' => $projects]);
    }

    public function saveFundingTransactionDetails(Request $request)
    {
        $transaction = $this->project->saveFundingTransactionDetails($request);

        if ($transaction == "Transaction saved successfully") {
            return "Transaction saved successfully";
        }else {
            return "Transaction was not saved";
        }
    }

    public function getAproject($id)
    {
        $project = $this->project->getAproject($id);

        return view('pages.project' , ['project' => $project]);
    }

    public function sort()
    {

        if (isset($_GET['status'])) {

            $parameter = htmlentities(strip_tags($_GET['status']));

            if ($parameter == "Ongoing") {
                return redirect()->intended('projects/ongoing-projects');
            }elseif ($parameter == "Completed") {
                return redirect()->intended('projects/completed-projects');
            }elseif ($parameter == "All") {
                return redirect()->intended('projects/all');
            }
        }else {
            return redirect()->back();
        }

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

    public function uploadImage(Request $request)
    {

    $project_title = session('project_title');
    (int)$project_id = session('project_id');

    $imageName = "{$project_title}"."_".request()->file->getClientOriginalName();

    $imageName = preg_replace("/[^a-zA-Z0-9.]/", "", $imageName);

    request()->file->move(public_path('img/projects/images'), $imageName);

    $this->project->insertImage($imageName, $project_id);

    return response()->json(['uploaded' => '/img/projects/images/'.$imageName]);

    }

  public function getSchoolProjects($school)
  {
      $projects = $this->project->getSchoolProjects($school);

      return view('pages.schoolprojects' , ['projects' => $projects]);
  }

  public function getSchool(Request $request)
  {

      if (isset($_GET['school']) && empty($_GET['school']) === false) {
        $schools = $this->project->getSchoolByWildCard($_GET['school']);
      }else {
          $schools = $this->project->getSchool();
      }

      return view('pages.search' , ['schools' => $schools]);
  }

  public function getProjectForFunding($id)
  {
      $project = $this->project->getProjectForFunding($id);

      return view('pages.payment' , ['project' => $project]);
  }



}
