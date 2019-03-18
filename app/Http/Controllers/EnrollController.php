<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enrolment;
use Auth;
use App\Course;

class EnrollController extends Controller
{
    public function checkEnrollment($course_id)
    {
        return Enrolment::where([
            'student_id' => Auth::id(),
            'course_id' => $course_id
        ])->count();
    }

    public function enroll($course_id)
    {
        if($this->checkEnrollment($course_id) == 0)
        {
            Enrolment::insert([
                'student_id' => Auth::id(),
                'course_id' => $course_id,
            ]);
            return view('message.success',['message' => 'you enroll to this courses with success']);
        }
        return view('message.methodPayment');
    }

    public function myCourses()
    {
        $courses = Enrolment::where('student_id',Auth::id())->join('courses','enrolments.course_id' ,'=' ,'courses.course_id')->get();
        return view('student.myCourses' ,['courses' => $courses]);
    }
}
