<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller {

    function index() {
        $socials = \App\Social::all();
        return view('welcome')->with('socials',$socials);

    }

}
