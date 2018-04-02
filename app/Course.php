<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /*
     * m-m with students
     */
    public function students()
    {
        return $this->belongsToMany('App\Student');
    }
}
