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
            ->join('courses','enrolments.course_id','=','courses.course_id')->get([
                'enrolments.id' , 'users.username','users.email','courses.name','enrolments.payment_prove']);
        return view('admin.index',['enrolment' => $enrolemnt]);
    }
    public function payment($id)
    {
        $enroll = Enrolment::where([
            'id' => $id,
        ]);
        $token = Str::random();
        $key = Hash::make($token);
        $enroll->update([
            'payment_token' => $token,
            'token_key' => $key
        ]);
        return back()->with(['success' => 'your user was approved with success']);
    }
}
