<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WindowController extends Controller
{
    function index() {
        $window = \App\Window::all()->sortByDesc('id');
        return view('window')->with('window',$window);

    }
}
