<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Project;
use App\Funding;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;


class ProjectRepository
{

    public function getUserProjects($user_id)
    {
        $projects = Project::where('user_id' , $user_id)->get();
        return $projects;
    }

    public function create($request)
    {

          try {

            $cost_me = 0;
            $category = "Personal";
            $amount_to_donate = "0";

            if (isset($request->personal_cost_me)) {
                $cost_me = 1;
                $category = "Personal";
            }
            elseif (isset($request->group_cost_me)) {
                $cost_me = 1;
                $category = "Group";
            }
            elseif (isset($request->public_cost_me)) {
                $cost_me = 1;
                $category = "Public";
            }

            if (isset($request->personal_amount_to_donate)) {
                $project_cost = $request->personal_amount_to_donate;
                $category = "Personal";
            }
            if (isset($request->group_amount_to_donate)) {
                $project_cost = $request->group_amount_to_donate;
                $category = "Group";
            }
            if (isset($request->public_amount_to_donate)) {
                $project_cost = $request->public_amount_to_donate;
                $category = "Public";
            }

            $project_cost = preg_replace("/[^0-9]/", "", $project_cost);

            $project = Project::create([

              'user_id' => Auth::user()->id,
              'title' => $request->title,
              'description' => $request->description,
              'beneficiary_school' => $request->beneficiary_school,
              'address' => $request->address,
              'state' => $request->state,
              'lga' => $request->lga,
              'project_cost' => $project_cost,
              'amount_raised' => 0,
              'cost_me' => $cost_me,
              'category' => $category,
              'status' => 'Ongoing',

            ]);

            if ($project) {
                return $project;
            }else {
              return false;
            }

          } catch (\Exception $e) {

              return false;

          }


    }

    public function saveFundingTransactionDetails($request)
    {
        try {

          $funding = Funding::create([

            'project_id' => $request->project_id,
            'name' => $request->name,
            'email' => $request->email,
            'amount' => $request->amount,
            'reference_id' => $request->reference_id,

          ]);

          $project = Project::findorfail($request->project_id);

          $amount_raised = $project->amount_raised + $request->amount;

          $project->update([
              'amount_raised' => $amount_raised,
          ]);

          if ($funding) {
              return 'Transaction saved successfully';
          }else {
              return false;
          }

        } catch (\Exception $e) {

        }

    }

    public function all()
    {
        $projects = Project::paginate(8);

        return $projects;
    }

    public function sort($parameter)
    {
        $projects = Project::where('status' , $parameter)->paginate(8);
        return $projects;
    }

    public function completedProjects()
    {
        $projects = Project::where('status' , 'Completed')->paginate(8);
        return $projects;
    }

    public function ongoingProjects()
    {
        $projects = Project::where('status' , 'Ongoing')->paginate(8);
        return $projects;
    }

    public function getAproject($id)
    {
        $project = Project::findorfail($id);
        return $project;
    }

    public function insertImage($imageName, $project_id)
    {
      $project = Project::findorfail($project_id);

      if (empty($project->image1)) {
          $image_key = 'image1';
      }elseif (empty($project->image2)) {
          $image_key = 'image2';
      }elseif (empty($project->image3)) {
          $image_key = 'image3';
      }elseif (empty($project->image4)) {
          $image_key = 'image4';
      }elseif (empty($project->image5)) {
          $image_key = 'image5';
      }

      $project->update([
          $image_key => $imageName,
      ]);

      if ($project) {
          return true;
      }else {
          return false;
      }

    }

    public function getSchoolProjects($school)
    {
        $projects = Project::where('beneficiary_school' , $school)->simplePaginate(8);
        return $projects;
    }

    public function getProjectForFunding($id)
    {
        $project = Project::findorfail($id);

        return $project;
    }

    public function getSchool()
    {
      $schools = array();
      $school_project = array();
      $projects = Project::all()->pluck('beneficiary_school');

      foreach ($projects as $key => $school) {

        if (in_array($school , $schools) === false) {
            array_push($schools , $school);
        }
      }

      foreach ($schools as $key => $school) {
          $fetch = Project::where('beneficiary_school' , $school)->get();
          $count = count($fetch);
          $school_project[$school] = $count;
      }

      // var_dump($school_project);
      // die();

      $collection = (new Collection($school_project))->paginate(20);

      return $collection;
    }

}
