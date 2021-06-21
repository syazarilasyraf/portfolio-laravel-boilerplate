<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tool;
use Session;

class AdminToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tool = Tool::all();
        return view('admin.tool_index')->with('tool',$tool);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tool_create');
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

        Tool::create($input);

        Session::flash('flash_message', 'Tool successfully added!');

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
        $tool = Tool::find($id);
        return view('admin.tool_index')->with('tool', $tool);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tool = Tool::find($id);
        return view('admin.tool_edit')->with('tool', $tool);
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
        $tool = Tool::find($id);

            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'link' => 'required'
            ]);

            $input = $request->all();

            $tool->fill($input)->save();

            Session::flash('flash_message', 'Tool updated!');

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
        $tool = Tool::find($id);

        $tool->delete();

        Session::flash('flash_message', 'Tool deleted!');

        return redirect()->route('admin.tool.index');
    }
}
