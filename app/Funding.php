<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funding extends Model
{
  //
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'project_id',
      'name',
      'email',
      'amount',
      'reference_id',
  ];
}
