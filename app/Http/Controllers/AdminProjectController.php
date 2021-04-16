<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Session;

class AdminProjectController extends Controller
{

    public function index()
    {

        $Projects = Project::all();
        return view('admin.project_index')->with('projects',$Projects);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project_create'); //
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);

            if ($files = $request->file('image')) {
            $destinationPath = 'image'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['image'] = "$profileImage";

            }

        $input = $request->all();

        Project::create($input);

        Session::flash('flash_message', 'Blog successfully added!');

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
        $Projects = Project::find($id);
        return view('admin.project_index')->with('projects',$Projects); // //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Projects = Project::find($id);
        return view('admin.project_edit')->with('projects',$Projects);

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

        $Projects = Project::find($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($files = $request->file('image')) {
                $destinationPath = 'image'; // upload path
                $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profileImage);
                $update['image'] = "$profileImage";
                }
        $input = $request->all();

        $Projects->fill($input)->save();

        Session::flash('flash_message', 'Blog updated!');

        return redirect()->back(); //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Projects = Project::find($id);

        $Projects->delete();

        Session::flash('flash_message', 'Blog deleted!');

        return redirect()->route('admin.project.index'); //

    }
}

