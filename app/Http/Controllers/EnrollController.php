<?php

namespace App\Http\Controllers;

use App\Enrolment;
use Auth;
use Illuminate\Support\Facades\Session;
use App\Mail\EnrollMail;
use Illuminate\Support\Facades\Mail;

class EnrollController extends Controller
{
    public function enroll($course_id)
    {
        if ($this->checkEnrollment($course_id) == 0) {
            Enrolment::insert([
                'student_id' => Auth::id(),
                'course_id' => $course_id,
            ]);

            Mail::to(Auth::user()->email)->send(new EnrollMail('thanks for enrollment' , 1));
            Session::flash('success','you enrolled with success');
            return view('message.methodPayment' , ['course_id' => $course_id] , ['success' => 'you enrolled with success']);
            //response()->with(['success' => 'you enrolled with success']);
        }

        return response()->view('message.methodPayment');
    }

    public function checkEnrollment($course_id)
    {
        return Enrolment::where([
            'student_id' => Auth::id(),
            'course_id' => $course_id
        ])->count();
    }

    public function myCourses()
    {
        $courses = Enrolment::where('student_id', Auth::id())->join('courses', 'enrolments.course_id', '=', 'courses.course_id')->get();
        return view('student.myCourses', ['courses' => $courses]);
    }
}
