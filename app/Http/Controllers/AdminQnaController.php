<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Question;
use Session;

class AdminQnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = Question::all();
        return view('admin.ama_index')->with('question',$question);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);

        return view('admin.ama_edit')->with('question',$question);
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
            'answer' => 'required',
          ]);

        $input = $request->all();

        $answer = new Answer;

        $answer -> question_id = $request->question_id;

        $answer -> answer = $request->answer;

        $answer -> save();

        Session::flash('flash_message', 'Submitted!');

        return redirect()->back();
    }

}
