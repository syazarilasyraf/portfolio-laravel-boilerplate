<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    function index() {
        $project = \App\Project::all()->sortByDesc('id');
        return view('about')->with('project',$project);

    }

}
