<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class RandomQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($answer= $request->answer) dd($answer);

        $question = Question::orderByRaw ( "RAND()" )->first();

        return view('random')->with('question',$question);

    }

    /**
     * Cheking ajax
     *
     */
    public function ajaxAnswer(Request $answer){

        $answer=$answer['answer'];

        return response()->json(['answer'=>$answer]);
    }


}
