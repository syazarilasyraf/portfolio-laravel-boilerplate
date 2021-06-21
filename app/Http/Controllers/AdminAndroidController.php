<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Android;
use Session;

class AdminAndroidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $android = Android::all();
        return view('admin.android_index')->with('android',$android);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.android_create');
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

        Android::create($input);

        Session::flash('flash_message', 'Tool-Android successfully added!');

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
        $android = Android::find($id);
        return view('admin.android_index')->with('android', $android);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $android = Android::find($id);
        return view('admin.android_edit')->with('android', $android);
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
        $android = Android::find($id);

            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'link' => 'required'
            ]);

            $input = $request->all();

            $android->fill($input)->save();

            Session::flash('flash_message', 'Tool-Android updated!');

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
        $android = Android::find($id);

        $android->delete();

        Session::flash('flash_message', 'Tool-Android deleted!');

        return redirect()->route('admin.android.index');
    }
}
