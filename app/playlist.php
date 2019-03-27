<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class playlist extends Model
{
    use SoftDeletes;
    public function course()
    {
        return $this->hasMany('App\Course','course_id','course_id');
    }
    protected $fillable = ['course_id','section','type', 'course_name', 'course_url'];
    protected $dates = ['deleted_at'];

}
