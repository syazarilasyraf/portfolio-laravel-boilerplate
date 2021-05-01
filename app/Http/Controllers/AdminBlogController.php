<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Session;


class AdminBlogController extends Controller
{

    public function index()
    {
        $blog = Blog::all();
        return view('admin.blog_index')->with('blog',$blog);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog_create'); //
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
            'description' => 'required'
          ]);

        $input = $request->all();

        Blog::create($input);

        Session::flash('flash_message', 'Blog successfully added!');

        return redirect()->back(); //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog_index')->with('blog',$blog); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog_edit')->with('blog',$blog); //
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
            $blog = Blog::find($id);

            $this->validate($request, [
                'title' => 'required',
                'description' => 'required'
            ]);

            $input = $request->all();

            $blog->fill($input)->save();

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
        $blog = Blog::find($id);

        $blog->delete();

        Session::flash('flash_message', 'Blog deleted!');

        return redirect()->route('admin.blog.index'); //
    }
}


