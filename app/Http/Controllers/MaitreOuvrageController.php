<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(Request $req)
{
    $data = Project::with('maitreOuvrage', 'categorie')->orderBy("NumProjet")->get();
    $categories = Categorie::all();

    return view("components.AllProjects", compact("data", "categories"));
}
}
