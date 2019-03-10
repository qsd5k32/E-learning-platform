<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\playlist;
use Illuminate\Support\Facades\Storage;
use Response;

class fileController extends Controller
{

    //@TODO secure this
    public function download($id)
    {
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
}
