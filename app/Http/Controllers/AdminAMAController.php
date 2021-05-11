<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ama;
use Session;

class AdminAMAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ama = ama::all();
        return view('admin.ama_index')->with('ama',$ama);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        ama::create($input);

        Session::flash('flash_message', 'Refresh to see the question!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ama = ama::find($id);
        return view('admin.ama_edit')->with('ama',$ama);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ama = ama::find($id);

        $this->validate($request, [
            'question' => 'required',
          ]);

        $input = $request->all();

        $ama->fill($input)->save();

        Session::flash('flash_message', 'Question Answered!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ama = ama::find($id);

        $ama->delete();

        Session::flash('flash_message', 'Deleted!');

        return redirect()->route('admin.ama.index');
    }
}
