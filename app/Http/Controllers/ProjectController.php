<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function showAdd()
    {
        return view('back_end.project.add');
    }
}
