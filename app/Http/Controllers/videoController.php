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

    public function url($id,Request $request)
    {
        $fileUrl = playlist::where('id' , $id)->value('course_url');
        $payment = Enrolment::where([
            'student_id' => Auth::id(),
            'course_id' => $id
        ])->value('payment');
        if(empty($fileUrl)) return abort(403);
        if($payment != 1 ) return abort(403,'you need to pay to show this content ');
        $filePath = storage_path('app/public/vid.mp4');
        $stream = new VideoStream($filePath);
        return response()->stream(function () use ($stream) {
            $stream->start();
        });
    }
}
