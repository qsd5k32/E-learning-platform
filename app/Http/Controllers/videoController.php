<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Response;
use App\VideoStream;
use App\playlist;
use App\Enrolment;
use Auth;
use Illuminate\Support\Facades\Route;

class videoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function url($course_id,$id)
    {
        $fileUrl = playlist::where('id' , $id)->value('course_url');
        $payment = Enrolment::where([
            'student_id' => Auth::id(),
            'course_id' => $course_id
        ])->value('payment');
        if(empty($fileUrl)) return abort(403);
        if($payment == 0 ) return abort(403,'you need to pay to show this content ');
        $filePath = storage_path('app/'.$fileUrl);
        $stream = new VideoStream($filePath);
        return response()->stream(function () use ($stream) {
            $stream->start();
        });
    }
}
