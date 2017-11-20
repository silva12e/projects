<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
    	'vehicle_type',
    	'make',
    	'year',
    	'color',
    	'engine',
    	'odometer_reading',
    ]
}
