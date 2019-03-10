<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\playlist;
use App\Course;
use App\Enrolment;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\paymentController;
use Closure;

class coursesController extends Controller
{


    // view course Information
    public function checkStatus($id)
    {
        $course = Course::where('course_id',$id);
        if($course->count() == 0)
        {
            return abort(404);
        }
        if($course->value('status') == 2){
            return abort(404);
        }
    }

    // view courses playlist
    public function viewPlaylist($id)
    {
        $this->checkStatus($id);
        $token = Enrolment::where([
            'student_id' => Auth::id(),
            'course_id' => $id
        ])->value('payment_token');

        if(!paymentController::pay($id))
        {
            return view('message.methodPayment',['course_id' => $id]);
        }
        paymentController::check($token);


        $course = Course::where('course_id',$id)->first();
        $playlist = playlist::where('course_id',$id)->get();
        return view('student.CoursePlaylist',[
            'playlist' => $playlist ,
            'course' => $course ,
            'token' => $token
        ]);
    }

    public function viewCourse($id,$token)
    {
        paymentController::check($token);
        if(playlist::where('id',$id)->count() == 0) abort(404);
        return view('student.viewContent',['id' => $id,'token' => $token]);
    }

    // view more info about course
    public function moreInfo($id)
    {
        $this->checkStatus($id);
        $course = Course::where('course_id',$id)->first();
        $author = Course::where('author_id',$course->author_id)
            ->join('users','users.id','=','author_id')
            ->join('details','details.user_id','=','author_id')->first();
        $enrollment = Enrolment::where([
            'student_id' => Auth::id(),
            'course_id' => $id
        ])->first();
        $studentCount = Enrolment::where('course_id',$id)->count();
        $author->makeHidden(['password','email_verified_at','remember_token','updated_at','created_at','deleted_at','author_id','user_id']);
        return view('student.CourseInfo',['course' => $course , 'author' => $author,'enrollment' => $enrollment , 'students' => $studentCount]);
    }
}
