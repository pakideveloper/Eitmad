<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
   public function country()
    {
    	return $this->hasOne('App\country','id','country_id');
    }
}