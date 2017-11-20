<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	protected $fillable = [
    	'type'
    ];

    public function service()
    {
    	return $this->hasOne('App\Service', 'id');
    }
}
