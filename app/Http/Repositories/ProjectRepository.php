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
              'amount_raised' => "0",
              'cost_me' => $cost_me,
              'category' => $category,
              'amount_to_donate' => $amount_to_donate,
              'status' => 'Ongoing',

            ]);

            if ($project) {
                return true;
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

}
