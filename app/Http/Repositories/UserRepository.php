<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Project;
use Illuminate\Support\Facades\Hash;


class UserRepository
{

  public function createUserProject($request)
  {

    // Create User
    $user = User::create([
      'first_name' => $request->first_name,
      'last_name' => $request->last_name,
      'phone' => $request->phone,
      'password' => Hash::make($request->password),
      'email' => $request->email,
      'verified' => 0,
    ]);

    $project = Project::create([

      'user_id' => $user->id,
      'title' => $request->title,
      'description' => $request->description,
      'beneficiary_school' => $request->beneficiary_school,
      'address' => $request->address,
      'state' => $request->state,
      'lga' => $request->lga,
      'cost_me' => "me",
      'category' => "me",
      'amount_to_donate' => "20",

    ]);

    Auth::loginUsingId($user->id);

    return $user;

  }

}
