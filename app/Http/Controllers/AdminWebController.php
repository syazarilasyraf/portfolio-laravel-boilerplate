<?php

namespace App\Http\Controllers;
use App\Web;
use Session;

use Illuminate\Http\Request;

class AdminWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $web = Web::all();
        return view('admin.web_index')->with('web',$web);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.web_create');
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
            'title' => 'required',
            'description' => 'required',
            'link' => 'required'
          ]);

        $input = $request->all();

        Web::create($input);

        Session::flash('flash_message', 'Tool-Web successfully added!');

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
        $web = Web::find($id);
        return view('admin.web_index')->with('web', $web);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $web = Web::find($id);
        return view('admin.web_edit')->with('web', $web);
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
        $web = Web::find($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'link' => 'required'
          ]);

        $input = $request->all();

        Web::create($input);

        Session::flash('flash_message', 'Tool-Web successfully added!');

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
        $web = Web::find($id);

        $web->delete();

        Session::flash('flash_message', 'Tool-Web deleted!');

        return redirect()->route('admin.web.index');
    }
}
