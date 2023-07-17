<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Projects\ProjectRequest;
use Intervention\Image\Facades\Image;
use App\Models\Project;
use Illuminate\Support\Str;
class ProjectsController extends Controller
{
    public function projects () {
        $projects = Project::all();
        return view('admin.projects.index',['projects' => $projects]);
    }

    public function creation () {
       return view('admin.projects.creation');
    }

    public function create (ProjectRequest $request) {

        $img = $request->img;
        $imgExtension = $img->getClientOriginalExtension();
        $imgName = time() . '.' . $imgExtension;
        $imgPath = 'app/images/' . $imgName;

        $resizedImage = Image::make($img)->resize(600, 500)->save(storage_path($imgPath));

        $project = new Project();
        $project->title = $request->title;
        $project->desc = $request->desc;
        $project->image = $imgPath;
        $project->slug = Str::slug($request->title);
        $project->status = $request->status;
        try {
            $project->save();
            return back()->with('success', 'Project has been saved successfully !');
        } catch (\Throwable $th) {
            return back()->with('failure', $th);
        }
    }
}

