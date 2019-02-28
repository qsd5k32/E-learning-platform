<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function playlist()
    {
        $this->hasMany('App\playlist','course_id','course_id');
    }

    protected $primaryKey = 'course_id';
    protected $fillable = ['name', 'description', 'cover_url'];
}
