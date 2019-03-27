<?php

namespace App\Http\Controllers;

use App\Course;
use App\Enrolment;
use App\playlist;
use App\Section;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{

    protected $token;
    // view course Information
    public function viewPlaylist($id)
    {
        $this->checkStatus($id);
        $token = Enrolment::where([
            'student_id' => Auth::id(),
            'course_id' => $id
        ])->value('payment_token');

        if (!paymentController::pay($id)) {
            return view('message.methodPayment', ['course_id' => $id]);
        }
        paymentController::check($token);


        $course = Course::where('course_id', $id)->first();
        $sections = Section::where('course_id',$id)->get();
        return view('student.CoursePlaylist', [
            'sections' => $sections,
            'course' => $course,
            'token' => $token
        ]);
    }

    // view courses playlist

    public function checkStatus($id)
    {
        $course = Course::where('course_id', $id);
        if ($course->count() == 0) {
            return abort(404);
        }
        if ($course->value('status') == 2) {
            return abort(404);
        }
    }

    public function viewCourse($id,$course_id, $token)
    {
        paymentController::check($token);
        if (playlist::where(['id' => $id , 'course_id' => $course_id])->count() == 0) abort(404);
        $playlist = playlist::where('course_id',$course_id)->get();
        $sections = Section::where('course_id',$course_id)->get();
        return view('student.viewContent', ['id' => $id, 'playlist' => $playlist,'sections' => $sections,'token' => $token]);
    }

    // view more info about course
    public function moreInfo($id)
    {
        $this->checkStatus($id);
        $course = Course::where('course_id', $id)->first();
        $author = Course::where('author_id', $course->author_id)
            ->join('users', 'users.id', '=', 'author_id')
            ->join('details', 'details.user_id', '=', 'author_id')->first();
        $enrollment = Enrolment::where([
            'student_id' => Auth::id(),
            'course_id' => $id
        ])->first();
        $studentCount = Enrolment::where('course_id', $id)->count();
        $author->makeHidden(['password', 'email_verified_at', 'remember_token', 'updated_at', 'created_at', 'deleted_at', 'author_id', 'user_id']);
        return view('student.CourseInfo', ['course' => $course, 'author' => $author, 'enrollment' => $enrollment, 'students' => $studentCount]);
    }
}
