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
use App\Http\Controllers\paymentController;
class videoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function url($id,$token)
    {
        $fileUrl = playlist::where('id' , $id)->value('course_url');
        paymentController::check($token);
        if(empty($fileUrl)) return abort(403);

        $filePath = storage_path('app/'.$fileUrl);
        $stream = new VideoStream($filePath);
        return response()->stream(function () use ($stream) {
            $stream->start();
        });
    }
}
