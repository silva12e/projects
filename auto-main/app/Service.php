<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
    	'title',
    	'vehicle_type',
    	'description',
    	'price',
    ];

    public function type()
    {
    	return $this->hasOne('App\Type');
    }
}
