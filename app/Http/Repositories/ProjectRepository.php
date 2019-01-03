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

}
