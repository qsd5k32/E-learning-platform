<?php

namespace App\Http\Controllers;

use App\playlist;
use Response;


class FileController extends Controller
{

    public function download($id, $token)
    {
        paymentController::check($token);
        $file = playlist::where('id', $id)->value('course_url');

        $filePath = storage_path('app' . '/' . $file);
        $ext = pathinfo($filePath, PATHINFO_EXTENSION);
        $fileName = playlist::where('id', $id)->value('course_name') . '.' . $ext;
        $mime = mime_content_type($filePath);
        return response()->file($filePath, [
            'Content-Type' => $mime,
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Content-Disposition' => 'inline; filename="' . $fileName . '"',
            'Pragma' => 'public',
        ]);

    }
}
