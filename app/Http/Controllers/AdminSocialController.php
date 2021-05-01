<?php

namespace App\Http\Controllers;

use App\Social;
use Illuminate\Http\Request;
use Session;

class AdminSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social = Social::all();
        return view('admin.social_index')->with('socials',$social);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.social_create'); //
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
            'github' => 'required',
            'linkedin' => 'required',
            'twitter' => 'required',
            'email' => 'required',
            ]);

        $input = $request->all();

        Social::create($input);

        Session::flash('flash_message', 'Social successfully added!');

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
        $social = Social::find($id);
        return view('admin.social_index')->with('socials',$social); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $social = Social::find($id);
        return view('admin.social_edit')->with('social', $social);
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
        $social = Social::find($id);

        $this->validate($request, [
            'github' => 'required',
            'linkedin' => 'required',
            'twitter' => 'required',
            'email' => 'required',
        ]);

        $input = $request->all();

        $social->fill($input)->save();

        // Social::create($input);

        Session::flash('flash_message', 'Social updated!');

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
        $social = Social::find($id);

        $social->delete();

        Session::flash('flash_message', 'Social deleted!');

        return redirect()->route('admin.social.index');//
    }

}
