<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookmark;
use Session;

class AdminBookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookmark = Bookmark::all();
        return view('admin.bookmark_index')->with('bookmark',$bookmark);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bookmark_create');
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

        Bookmark::create($input);

        Session::flash('flash_message', 'Bookmark successfully added!');

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
        $bookmark = Bookmark::find($id);
        return view('admin.bookmark_index')->with('bookmark', $bookmark);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookmark = Bookmark::find($id);
        return view('admin.bookmark_edit')->with('bookmark', $bookmark);
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
        $bookmark = Bookmark::find($id);

            $this->validate($request, [
                'title' => 'required',
                'description' => 'required'
            ]);

            $input = $request->all();

            $bookmark->fill($input)->save();

            Session::flash('flash_message', 'Bookmark updated!');

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
        $bookmark = Bookmark::find($id);

        $bookmark->delete();

        Session::flash('flash_message', 'Bookmark deleted!');

        return redirect()->route('admin.bookmark.index');
    }
}
