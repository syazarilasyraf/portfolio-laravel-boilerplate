<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    function index() {
        $Projects = \App\Project::all();
        return view('projects')->with('projects',$Projects);

    }

}
