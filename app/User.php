<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Detail;
use App\Enrolment;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;

    // get user level
    public function level()
    {
        return 'level';
    }

    public function detail()
    {
       return $this->hasOne(Detail::class,'user_id');
    }

    public function enrolments()
    {
        return $this->hasMany(Enrolment::class,'student_id');
    }
    protected $fillable = [
        'name', 'username' , 'email', 'password', 'level'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token' ,
    ];
    
    protected $dates = ['deleted_at'];
}
