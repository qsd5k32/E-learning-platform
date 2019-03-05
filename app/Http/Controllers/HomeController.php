<?php

namespace App\Http\Controllers;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {



        $courses = Course::where('status', 1)->get();
        return view('home',['courses' => $courses,'url' => Storage::url('vid.mp4')]);
    }
}
