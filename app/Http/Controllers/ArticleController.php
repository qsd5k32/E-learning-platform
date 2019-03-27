<?php

namespace App\Http\Controllers;

use App\Article;
use App\playlist;
use App\Section;
use App\Enrolment;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\paymentController;

class ArticleController extends Controller
{
    protected $toekn;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($id ,$course_id,$token)
    {

        paymentController::check($token);

        $article = Article::where([
            'id' => $id,
            'course_id' => $course_id
        ])->first();
        if(empty($article)) abort(404);
        $playlist = playlist::where('course_id',$article->course_id)->get();
        $sections = Section::where('course_id',$article->course_id)->get();
        $this->token = Enrolment::where([
            'student_id' => Auth::id(),
            'course_id' => $article->course_id
        ])->value('payment_token');
        return view('student.article',['article' => $article ,'playlist' => $playlist,'sections' => $sections,'token' => $this->token]);
    }



}
