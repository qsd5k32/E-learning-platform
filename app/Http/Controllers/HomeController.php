<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $courses = Course::where('status', 1)->get();
        return view('home', ['courses' => $courses, 'url' => Storage::url('vid.mp4')]);
    }
}
