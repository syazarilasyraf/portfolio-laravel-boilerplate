<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index() {
        $blogs = \App\Blog::all();
        return view('blog')->with('blogs',$blogs);

    }
}
