<?php

namespace App\Http\Controllers;

use App\Enrolment;
use Auth;

class EnrollController extends Controller
{
    public function enroll($course_id)
    {
        if ($this->checkEnrollment($course_id) == 0) {
            Enrolment::insert([
                'student_id' => Auth::id(),
                'course_id' => $course_id,
            ]);
            return back()->with(['success' => 'you enrolled with success']);
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
