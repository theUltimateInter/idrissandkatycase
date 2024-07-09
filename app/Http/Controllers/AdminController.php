<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function afficher(Request $req){
        if ($req->val !="") {
            $com = $req->val;
        }
        else{ $com ="A7san Idriss" ;}
        return view("hello",compact("com"));
    }

    public function index()
    {
        $data = Project::orderBy("NumProjet")->get();

        return view("admin.index",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        if (Auth::attempt([
            "email"=>$req->email ,
            "password"=>$req->password
        ])) {
              return redirect("/admin")->with("succes" , "Bienvenue " .auth()->user()->name);
        }
        return redirect("/login")->with("failed" , "l'email ou mot de pass est Incorrect");
    }

    public function deconect(Request $req){
       
        session()->flush();
         Auth::logout();
         return redirect("/login");
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $req)
    {
        $data = Project::findOrFail($req->id);
        return view("admin.modifier",compact("data"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            "images.*"=>"required|image|mimes:png,jpg,jpeg"
         ]);
        $pi = $request->id;
      //dd($request->post());
      foreach ($request->file("images") as $file) {
         $fileName =  time()."_".$file->getClientOriginalName();
         $file->move(public_path('data'),$fileName);
         ProjectImage::create([
            "project_id"=>$pi,
            "images"=>'data/'.$fileName
         ]);
      }
      return redirect()->back()->with("success" , "les Images Est Ajouté Avec Succés");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req)
    {
        $project_image = ProjectImage::find($req->id);
        if (File::exists($project_image->images)) {
            File::delete($project_image->images);
        }
        $project_image->delete();
        return redirect()->back();
    }
}
