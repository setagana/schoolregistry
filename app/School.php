<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    /*
    * The relationship between schools and students.
    */
    public function students()
    {
      return $this->belongsToMany('App\Student')->withTimestamps();
    }
}
