<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'body', 'date', 'venue','type'];

	    public function EventType()
	    {
	    	return $this->hasMany('App/EventType');
	    }
}
