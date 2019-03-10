<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Enrolment;
use Illuminate\Support\Str;
use Hash;
class adminController extends Controller
{
    public function index()
    {
        $enrolemnt = Enrolment::whereNull('payment_token')->join('users','enrolments.student_id','=','users.id')
            ->join('courses','enrolments.course_id','=','courses.course_id')->get();
        $enrolemnt->makeHidden(['password','email_verified_at','remember_token','updated_at','created_at','deleted_at','author_id','user_id','description','level']);
        return view('admin.index',['enrolment' => $enrolemnt]);
    }
    public function payment($id,$c_id)
    {
        $enroll = Enrolment::where([
            'student_id' => $id,
            'course_id' => $c_id
        ]);
        $token = Str::random();
        $key = Hash::make($token);
        $enroll->update([
            'payment_token' => $token,
            'token_key' => $key
        ]);
        return view('message.success',['message' => 'payment receipt']);
    }
}
