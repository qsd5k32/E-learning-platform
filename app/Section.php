<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $primaryKey = "course_id";
    protected $fillable = ['name','course_id'];
    public function playlist()
    {
        return $this->hasMany('App\playlist','section','id');
    }
}
