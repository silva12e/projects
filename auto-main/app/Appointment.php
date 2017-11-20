<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
    	'vehicle_id',
    	'service_id',
    	'client_id',
    	'date_time',
    ]
}
