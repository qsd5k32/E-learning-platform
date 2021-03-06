<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use Auth;
use DB;
use Illuminate\Http\Request;

class courseController extends Controller
{
    //  youtube video privacy ('public , private , unlisted')
    private $privacy;
    private $title;
    private $description;
    private $cover;

    public function index()
    {

        if ($this->checkDetails() == 0) return view('message.error', ['message' => 'you cant create course with out your details pleas fill up details in user > my account']);
        $category = Category::all();
        return view('teacher.createNew', ['category' => $category]);

    }

    private function checkDetails()
    {
        $details = Db::table('details')->where('user_id', Auth::id())->count();
        return $details;

    }

    public function createNew(Request $request)
    {
        if ($this->checkDetails() == 0) return view('message.error', ['message' => 'you cant create course with out your details pleas fill up details in user > my account']);
        // set video privacy
        $this->privacy = 'unlisted';

        $this->validateCourseData($request);

        $fileName = Auth::id() . time() . '.' . $this->cover->getClientOriginalExtension();
        $request->file('coverImage')->move('uploads', $fileName);
        Course::insert([
            'name' => $this->title,
            'description' => $this->description,
            'cover_url' => $fileName,
            'author_id' => Auth::id(),
            'category' => $request->input('category'),
            'status' => '2',
            'price' => '0',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return view('message.success', ['message' => 'your course was created with success']);

    }

    private function validateCourseData($request)
    {
        $request->validate([
            'courseTitle' => 'required',
            'courseDescription' => 'required',
            'coverImage' => 'required|image|mimes:jpeg,png,jpg',
            'category' => 'required',
            'status' => 'nullable|numeric',
            'price' => 'nullable|numeric',
        ]);
        // video information
        $this->title = $request->input('courseTitle');
        $this->description = $request->input('courseDescription');
        $this->cover = $request->file('coverImage');

    }

    public function updateCourse($id)
    {
        $this->checkId($id);
        $course = Course::where('course_id', $id)->first();
        return view('teacher.updateCourse', ['course' => $course]);
    }

    // select view of update course

    private function checkId($id)
    {
        $course = Course::where('course_id', $id)->where('author_id', Auth::id())->count();
        if ($course == 0 or !is_numeric($id)) return abort(404);
    }

    // post form to update course

    public function update($id, Request $request)
    {
        $request->validate([
            'courseTitle' => 'required',
            'courseDescription' => 'required',
            'coverImage' => 'nullable|image|mimes:jpeg,png,jpg',
            'courseStatus' => 'required|numeric',
            'coursePrice' => 'required|numeric',
        ]);
        $course = Course::where('course_id', $id);
        $fileName = $course->value('cover_url');
        if (!empty($request->file('coverImage'))) {
            $fileName = Auth::id() . time() . '.' . $this->cover->getClientOriginalExtension();
            $request->file('coverImage')->move('uploads', $fileName);
        }
        $course->update([
            'name' => $request->input('courseTitle'),
            'description' => $request->input('courseDescription'),
            'cover_url' => $fileName,
            'author_id' => Auth::id(),
            'status' => $request->input('courseStatus'),
            'price' => $request->input('coursePrice'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return back()->with(['success' => 'your course was updated wit success']);

    }


}
