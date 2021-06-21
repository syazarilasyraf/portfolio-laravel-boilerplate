<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index() {
        $web = \App\Web::all()->sortByDesc('id');
        return view('web')->with('web',$web);

    }
}
