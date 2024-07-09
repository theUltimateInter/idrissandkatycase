<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function create(){
        return view("admin.CategoryForm");
    }
    public function store(Request $req){
        Categorie::create([
            "name"=>$req->category
        ]);
        return redirect("/admin");
    }
}
