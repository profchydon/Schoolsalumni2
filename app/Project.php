<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'beneficiary_school',
        'address',
        'state',
        'lga',
        'category',
        'cost_me',
        'amount_to_donate',
    ];
}
