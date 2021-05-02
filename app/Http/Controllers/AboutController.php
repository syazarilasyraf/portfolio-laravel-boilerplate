<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller {

    public function index() {

        $about= \App\About::all();
        return view('about')->with('about',$about);

    }

}
