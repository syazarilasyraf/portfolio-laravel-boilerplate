<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use Session;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home= Home::all();
        return view('admin.home_index')->with('home',$home);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home_create');
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
            'greeting' => 'required',
            'title' => 'required',
            'description' => 'required'
          ]);

        $input = $request->all();

        Home::create($input);

        Session::flash('flash_message', 'Home successfully added!');

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
        $home = Home::find($id);
        return view('admin.home_index')->with('home',$home); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $home = Home::find($id);
        return view('admin.home_edit')->with('home',$home);
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
        $home = Home::find($id);

            $this->validate($request, [
                'greeting' => 'required',
                'title' => 'required',
                'description' => 'required'
            ]);

            $input = $request->all();

            $home->fill($input)->save();

            Session::flash('flash_message', 'Home updated!');

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
        $home = Home::find($id);

        $home->delete();

        Session::flash('flash_message', 'Home deleted!');

        return redirect()->route('admin.home.index');
    }
}
