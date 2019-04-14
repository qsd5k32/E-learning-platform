<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Support\Facades\Storage;
use App\Mail\EnrollMail;
use Illuminate\Support\Facades\Mail;
use Auth;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $courses = Course::where('status', 1)
            ->join('categories', 'categories.id', '=', 'courses.category')
            ->get([
                'courses.name AS course_name', 'courses.description',
                'courses.cover_url', 'courses.price', 'courses.course_id',
                'categories.name AS category', 'categories.icon', 'categories.color'
            ]);
        return view('home', ['courses' => $courses]);

    }

    public function welcome()
    {
        return view('welcome');
    }

    public function test()
    {

    }
}
