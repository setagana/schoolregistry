<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /*
    * The relationship between students and schools.
    */
    public function schools()
    {
      return $this->belongsToMany('App\School')->withTimestamps();
    }
}
