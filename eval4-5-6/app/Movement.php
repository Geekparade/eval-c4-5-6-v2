<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    protected $fillable = [
    	'id',
    	'article_id',
    	'quantity',
    	'date-time',
    	'movement_type_id',
    	'purchase_id',
    	'sale_id'
    ];

    public $timestamps  = false;

    public function movement_type() {
    	return $this->hasMany(MovementType::class);
    	return $this->belongsTo(MovementType::class);
    }
}
