<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AndroidController extends Controller
{
    function index() {
        $android = \App\Android::all()->sortByDesc('id');
        return view('android')->with('android',$android);

    }
}
