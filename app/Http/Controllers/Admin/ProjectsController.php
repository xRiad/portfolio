<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
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

    public function create (Request $request) {
        $project = new Project();

        $project->title = $request->title;
        $project->desc = $request->desc;
        
        dd($project->$_COOKIE);
    }
}

