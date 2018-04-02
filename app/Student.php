<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * a student belongs to a section
     */
    public function section()
    {
        return $this->belongsTo('App\Section');
    }
    /*
     * student has many to many relationship with course
     */
    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }
}
