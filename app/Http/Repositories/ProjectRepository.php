<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Project;
use Illuminate\Support\Facades\Hash;


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
            if (isset($request->group_cost_me)) {
                $cost_me = 1;
                $category = "Group";
            }
            if (isset($request->public_cost_me)) {
                $cost_me = 1;
                $category = "Public";
            }

            if (isset($request->personal_amount_to_donate)) {
                $amount_to_donate = $request->personal_amount_to_donate;
                $category = "Personal";
            }
            if (isset($request->group_amount_to_donate)) {
                $amount_to_donate = $request->group_amount_to_donate;
                $category = "Group";
            }
            if (isset($request->public_amount_to_donate)) {
                $amount_to_donate = $request->public_amount_to_donate;
                $category = "Public";
            }

            $project = Project::create([

              'user_id' => Auth::user()->id,
              'title' => $request->title,
              'description' => $request->description,
              'beneficiary_school' => $request->beneficiary_school,
              'address' => $request->address,
              'state' => $request->state,
              'lga' => $request->lga,
              'project_cost' => $request->project_cost,
              'amount_raised' => 0,
              'cost_me' => $cost_me,
              'category' => $category,
              'amount_to_donate' => $amount_to_donate,
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

    public function all()
    {
        $projects = Project::simplePaginate(2);

        return $projects;
    }

    public function sort($parameter)
    {
        $projects = Project::where('status' , $parameter)->simplePaginate(2);
        return $projects;
    }

    public function completedProjects()
    {
        $projects = Project::where('status' , 'Completed')->simplePaginate(2);
        return $projects;
    }

    public function ongoingProjects()
    {
        $projects = Project::where('status' , 'Ongoing')->simplePaginate(2);
        return $projects;
    }

    public function getAproject($id)
    {
        $project = Project::findorfail($id);
        return $project;
    }

    public function insertImage($imageName, $project_id)
    {
      $project = Project::where('id' , $project_id)->first();

      if (empty($project->image1) || $project->image1 == NULL) {
          $image_key = 'image1';
      }elseif (empty($project->image2) || $project->image2 == NULL) {
          $image_key = 'image2';
      }elseif (empty($project->image3) || $project->image3 == NULL) {
          $image_key = 'image3';
      }elseif (empty($project->image4) || $project->image4 == NULL) {
          $image_key = 'image4';
      }elseif (empty($project->image5) || $project->image5 == NULL) {
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

}
