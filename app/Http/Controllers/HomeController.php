<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    function index() {
        $home = \App\Home::all();
        return view('home')->with('home',$home);

    }

}
