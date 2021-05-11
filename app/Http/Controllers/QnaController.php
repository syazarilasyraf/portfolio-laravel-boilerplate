<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
// use App\Answer;
use Session;

class QnaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = Question::all();
        return view('ama')->with('question',$question);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
          ]);

        $input = $request->all();

        Question::create($input);

        Session::flash('flash_message', 'Question submitted!');

        return redirect()->back();
    }

    // public function addQuestion(Request $request)
    // {
    //     $question = new Question();

    //     $question->question = "First Question";

    //     $question->save();

    //     return "Question submitted";


    // }

    // public function addAnswer($id)
    // {
    //     $question = Question::find($id);

    //     $answer = new Answer();

    //     $answer->answer = "First answer";

    //     $question->answers()->save($answer);

    //     return "Answer submitted";
    // }
}
