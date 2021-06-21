<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Window;
use Session;

class AdminWindowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $window = Window::all();
        return view('admin.window_index')->with('window',$window);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.window_create');
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

        Window::create($input);

        Session::flash('flash_message', 'Tool-Window successfully added!');

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
        $window = Window::find($id);
        return view('admin.window_index')->with('window', $window);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $window = Window::find($id);
        return view('admin.window_edit')->with('window', $window);
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
        $window = Window::find($id);

            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'link' => 'required'
            ]);

            $input = $request->all();

            $window->fill($input)->save();

            Session::flash('flash_message', 'Tool-Window updated!');

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
        $window = Window::find($id);

        $window->delete();

        Session::flash('flash_message', 'Tool-Window deleted!');

        return redirect()->route('admin.window.index');
    }
}
