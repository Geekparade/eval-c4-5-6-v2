<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    	'name', 
    	'category_id', 
    	'unit_id', 
    	'sales_price'
    ];

    public $timestamps  = false;

    public function movement() {
    	return $this->hasMany(Movement::class);
    	return $this->belongsTo(Movement::class);
    }
}
