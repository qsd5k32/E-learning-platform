<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = ['course_id','title','content'];
    protected $dates = ['deleted_at'];
}
