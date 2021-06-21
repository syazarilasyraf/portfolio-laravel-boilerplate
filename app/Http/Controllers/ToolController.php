<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolController extends Controller
{
    function index() {
        $tool = \App\Tool::all()->sortByDesc('id');
        return view('tools')->with('tool',$tool);

    }
}
