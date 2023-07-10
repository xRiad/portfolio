<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function projects () {
        $projects = Project::all();
        return view('admin.projects.index',['projects' => $projects]);
    }

    public function creation () {
       return view('admin.projects.creation');
    }
}


