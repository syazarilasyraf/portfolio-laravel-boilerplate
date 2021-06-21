<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    function index() {
        $bookmark = \App\Bookmark::all()->sortByDesc('id');
        return view('bookmarks')->with('bookmark',$bookmark);

    }
}
