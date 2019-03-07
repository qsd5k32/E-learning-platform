<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\playlist;
use App\Course;
use App\Enrolment;
use Illuminate\Support\Facades\Auth;

class coursesController extends Controller
{


    // view course Information
    public function checkStatus($id)
    {
        $course = Course::where('course_id',$id)->first();
        if($course->status == 2){
            return abort(404);
        }
    }

    // view courses playlist
    public function viewPlaylist($id)
    {
        $this->checkStatus($id);
        $payment = Enrolment::where([
            'student_id' => Auth::id(),
            'course_id' => $id
        ])->value('payment');

        if($payment != 1 ) return abort(403,'you need to pay to show this content ');

        $course = Course::where('course_id',$id)->first();
        $playlist = playlist::where('course_id',$id)->get();
        return view('student.CoursePlaylist',[
            'playlist' => $playlist ,
            'course' => $course
        ]);
    }

    public function viewCourse($id,$course_id)
    {
        if(playlist::where('id',$course_id)->count() == 0) abort(404);
        return view('student.viewContent',['url' => $id ,'course_id' => $course_id]);
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
