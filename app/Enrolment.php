<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrolment extends Model
{
    protected $primaryKey = 'course_id';

    public function courses()
    {
        $this->hasMany('App\courses','course_id','course_id');
    }
}
