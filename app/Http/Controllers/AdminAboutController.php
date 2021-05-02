<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Session;
use Image;

class AdminAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('admin.about_index')->with('about',$about);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate ([
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'description' => 'required',
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

            $input = $request->only(['description']) + ['image' => $image_name];

        About::create($input);

        Session::flash('flash_message', 'About successfully added!');

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
        $about = About::find($id);
        return view('admin.about_show')->with('about',$about);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.about_edit')->with('about',$about);
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
        $about = About::find($id);

        $request->validate ([
            'description' => 'required',

        ]);

            $input = $request->all();

        $about->fill($input)->save();

        Session::flash('flash_message', 'About updated!');

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
        $about = About::find($id);

        $about->delete();

        Session::flash('flash_message', 'About deleted!');

        return redirect()->route('admin.about.index');
    }
}
