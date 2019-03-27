<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicChat extends Model
{
    protected $fillable = ['name','sex','level','country','messanger','instagram','skype','topic'];

}
