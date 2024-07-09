<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{ 
    public function create(Request $req)
    {
        $project = Project::all();
        return view("admin.addImage", compact("project"));
    }

    public function store(Request $request, Project $project)
    {
        $request->validate([
            "images.*" => "required|image|mimes:png,jpg,jpeg"
        ]);

        $projectId = $project->id;
        $projectName = $project->name;

        // Création du répertoire s'il n'existe pas
        $directory = public_path('data/' . $projectName);
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true, true);
        }

        foreach ($request->file("images") as $file) {
            $fileName = time() . "_" . $file->getClientOriginalName();
            $file->move($directory, $fileName);

            ProjectImage::create([
                "project_id" => $projectId,
                "images" => 'data/' . $projectName . '/' . $fileName
            ]);
        }

        return redirect("/");
    }
}
