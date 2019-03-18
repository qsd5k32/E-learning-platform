<?php

namespace App\Http\Controllers;

use App\Enrolment;
use Illuminate\Http\Request;
use App\playlist;
use Illuminate\Support\Facades\Storage;
use Response;
use App\Http\Controllers\paymentController;


class FileController extends Controller
{

    //@TODO secure this
    public function download($id,$token)
    {
        paymentController::check($token);
        $file = playlist::where('id',$id)->value('course_url');

        $filePath = storage_path('app'.'/'.$file);
        $ext = pathinfo($filePath, PATHINFO_EXTENSION);
        $fileName = playlist::where('id',$id)->value('course_name') . '.'. $ext;
        $mime = mime_content_type($filePath);
        return response()->file($filePath,[
            'Content-Type' => $mime,
            'Cache-Control'         => 'must-revalidate, post-check=0, pre-check=0',
            'Content-Disposition' => 'inline; filename="'.$fileName.'"',
            'Pragma'                => 'public',
        ]);

    }
    public function paymentProve($id)
    {
        $fileUrl = Enrolment::where('id' , $id)->value('payment_Prove');
        $mime = mime_content_type(storage_path("app/".$fileUrl));

        $file = Storage::get($fileUrl);
        $type = Storage::mimeType($fileUrl);
        $response = Response::make($file, 200)->header("Content-Type", $type);
        return $response;

    }
}
