<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovementType extends Model
{
    protected $fillable = [
    	'id',
    	'name',
    	'direction_id'
    ];

    public $timestamps  = false;

    public function direction() {
    	return $this->hasMany(Direction::class);
    	return $this->belongsTo(Direction::class);
    }
}
