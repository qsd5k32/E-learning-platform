<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $primaryKey = 'user_id';
    protected $fillable = ['user_id','identity_national_number' , 'phone_number' , 'address' , 'photo' , 'resume'];
}
