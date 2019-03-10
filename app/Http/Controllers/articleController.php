<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\paymentController;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //@TODO create article view page
    public function index($id ,$token)
    {

        paymentController::check($token);

        $article = Article::find($id)->first();
        return view('student.article',['article' => $article]);
    }



}
