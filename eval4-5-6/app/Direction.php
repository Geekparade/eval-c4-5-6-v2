<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $fillable = [
    	'id',
    	'name',
    	'multiplier'
    ];

    public $timestamps  = false;
}
