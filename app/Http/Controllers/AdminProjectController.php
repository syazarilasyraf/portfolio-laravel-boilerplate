<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Session;
use Image;

class AdminProjectController extends Controller
{

    public function index()
    {

        $project = Project::all();
        return view('admin.project_index')->with('project',$project);

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

        //Methods we can use on $request
        //guessExtension()
        //getMimeType()
        //store()
        //asStore()
        //storePublicly()
        //move()
        //getClientOriginalName()
        //getClientMimeType()
        //guessClientExtension()
        //getSize()
        //getError()
        //isValid()

        $request->validate ([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',

        ]);

            $image = $request->file('image');

            $image_name = time() . '-' . $request->title . '.'
            .$image->extension();

            $destinationPath = public_path('images');

            $resize_image = Image::make($image->getRealPath());

            $resize_image->resize(150, 150, function($constraint)
            {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $image_name);



            // $newImageName = time() . '-' . $request->title . '.' .
            // $request->image->extension();

            // $destinationPath = public_path('images');
            // // $request->file->getFilename();

            // $request->image->move($destinationPath, $newImageName);

            // $input = $request->all();

        $input = $request->only(['title', 'description']) + ['image' => $image_name];

        Project::create($input);

        Session::flash('flash_message', 'Project successfully added!');

        return redirect()->back();

    }

        // public function show()
        // {
        //     return Storage::size('public/images');
        // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('admin.project_show')->with('project',$project); // //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.project_edit')->with('project',$project);

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

        $project = Project::find($id);

        $request->validate ([
            'title' => 'required',
            'description' => 'required',

        ]);

        // $image = $request->file('image');

        // $image_name = time() . '-' . $request->title . '.'
        // .$image->extension();

        // $destinationPath = public_path('images');

        // $resize_image = Image::make($image->getRealPath());

        // $resize_image->resize(150, 150, function($constraint)
        // {
        //     $constraint->aspectRatio();
        // })->save($destinationPath . '/' . $image_name);

            // $newImageName = time() . '-' . $request->title . '.' .
            // $request->image->extension();


            // $request->image->move(public_path('images'), $newImageName);

            $input = $request->all();
            // $input = $request->only(['title', 'description']) + ['image' => $newImageName];

        $project->fill($input)->save();

        Session::flash('flash_message', 'Project updated!');

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
        $project = Project::find($id);

        $project->delete();

        Session::flash('flash_message', 'Project deleted!');

        return redirect()->route('admin.project.index'); //

    }



}

