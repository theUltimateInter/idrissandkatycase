<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\MaitreOuvrage;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function client(){
        $maitres = MaitreOuvrage::all();
        return view("components.client",compact("maitres"));
    }
    public function client_project(String $name){
        $projects = Project::where("maitreOuvrage" , $name)->get();
        return redirect('http://127.0.0.1:8000/searchProject?nomprojet=&ville='.$name.'&categorie=');
    }
    public function addObservation(Request $request, $id)
{
    $project = Project::findOrFail($id);
    
    foreach ($request->input('observation') as $observation) {
        $project->observations()->create([
            'observationtext' => $observation,
        ]);
    }
    
    return redirect()->back()->with('success', 'Observations ajoutées avec succès.');
}

    public function viewVideo($id)
{
    $project = Project::with('photos')->find($id);
    
    if (!$project) {
        abort(404); // Gérer le cas où le projet n'est pas trouvé
    }
    
    // Récupérer l'URL de la vidéo depuis la base de données
    $videoUrl = asset($project->video); // Assurez-vous que $project->video contient le chemin relatif de la vidéo
    
    // Passer le projet avec l'URL de la vidéo à la vue
    return view('components.lireVideo', [
        'project' => $project,
        'videoUrl' => $videoUrl
    ]);
}

    
public function index(Request $req)
{
    $data = Project::orderBy("NumProjet")->get();
     $categories = Categorie::orderBy('id', 'desc')->get(); // Tri par ordre décroissant
    
    $maitresOuvrage = Project::select('maitreOuvrage')->distinct()->get(); // Add this line to get the distinct maitreOuvrage values
    $filtred = Project::orderBy("NumProjet")->get();
    
    // Filtering logic
    if ($req->num_projet != "") {
        $filtred = Project::where("name", $req->num_projet)->get();
    } elseif ($req->ville != "") {
        $filtred = Project::where("Ville", $req->ville)->get();
    } elseif ($req->Année != "") {
        $filtred = Project::where("Année", $req->Année)->get();
    } elseif ($req->categorie != "") {
        $filtred = Project::where("categorie_id", $req->categorie)->get();
    } elseif ($req->maitreOuvrage != "") {
        $filtred = Project::where("maitreOuvrage", $req->maitreOuvrage)->get();
    } elseif ($req->architecte != "") {
        $filtred = Project::where("architecte", $req->architecte)->get();
    } elseif ($req->observation != "") {
        $filtred = Project::where("observation", $req->observation)->get();
    }
    
    return view("components.AllProjects", compact("filtred", "data", "categories", "maitresOuvrage"));
}

    public function indexDetails(Request $req)
{
    $data = Project::orderBy("NumProjet")->get();
    $categories = Categorie::all();
    $maitresOuvrage = Project::select('maitreOuvrage')->distinct()->get();
    $filtred = Project::query();

    // Filtrage des projets en fonction des paramètres de la requête
    if ($req->filled('nomprojet')) {
        $filtred->where("name", $req->nomprojet);
    }
    if ($req->filled('ville')) {
        $filtred->where("maitreOuvrage", $req->ville);
    }
    if ($req->filled('categorie')) {
        $filtred->where("categorie_id", $req->categorie);
    }

    $filtred = $filtred->get();

    // Charger les images pour chaque projet filtré
    foreach ($filtred as $project) {
        $project->load('photos'); // Charger les images associées à ce projet
    }

    return view("components.detailsProjet", compact("filtred", "data", "categories", "maitresOuvrage"));
}


    public function create(){
        $categories = Categorie::all();
        return view("admin.ajouter",compact("categories"));
    }
    public function store(Request $req){
        $req->validate([
            "NumProjet"=> "required",
            "name"=> "required",
            "ville"=> "required",
            "categorie_id"=> "required",
            "Année"=> "required", 
            "Description"=> "required",
            "maitreOuvrage"=> "required",
            "architecte" =>"required",
            "observation"=>"required"
        ]);
       Project::create([
        "NumProjet"=>$req->NumProjet,
          "name"=>$req->name,
          "ville"=>$req->ville,
          "categorie_id"=>$req->categorie_id,
          "Année"=>$req->Année,
          "Description"=>$req->Description,
          "maitreOuvrage"=>$req->maitreOuvrage,
          "architecte" =>$req->architecte,
            "observation"=>$req->observation
       ]);
       return redirect("/admin")->with("success","Le Produit Est Bien Ajouté");
    }
    public function show(Request $req){
        $filtred = Project::where('id',$req->id)->get();
        return view("components.details",compact("filtred"));
    }
    public function destroy(Request $req){
        $project = Project::findOrFail($req->id);
        $project->delete();
        return redirect("/admin");
    }
    public function edit(Request $req){
        $project = Project::findOrFail($req->id);
        $categories = Categorie::all();
        return view("admin.edit",compact("project" , "categories"));
    }
    public function update(Request $req){
        $req->validate([
            "NumProjet"=> "required",
            "name"=> "required",
            "ville"=> "required",
            "categorie_id"=> "required",
            "Année"=> "required", 
            "Description"=> "required",
            "maitreOuvrage"=> "required" ,
            "architecte" =>"required" ,
            "observation"=>"required"
        ]);
       Project::where('id', $req->id)->update([
        "NumProjet"=>$req->NumProjet,
        "name"=>$req->name,
        "ville"=>$req->ville,
        "categorie_id"=>$req->categorie_id,
        "Année"=>$req->Année,
        "Description"=>$req->Description,
        "maitreOuvrage"=>$req->maitreOuvrage,
        "architecte" =>$req->architecte,
            "observation"=>$req->observation
       ]);
       return redirect("/admin")->with("success","Le Projet Est Modifié Avec Succée");
    }

    public function showUpdateVideoForm($id) {
        $project = Project::findOrFail($id);
        return view('admin.modifyVideo', compact('project'));
    }
    
    public function updateVideo(Request $req, $id){
    $req->validate([
        "video" => "required|mimes:mp4,avi,mov|max:20000"
    ]);

    if ($req->hasFile('video')) {
        $file = $req->file('video');
        $fileName = time() . "_" . $file->getClientOriginalName();
        $file->move(public_path('data'), $fileName);

        Project::where('id', $id)->update([
            "video" => 'data/' . $fileName
        ]);

        return redirect("/admin")->with("success", "Le vidéo du projet est modifié avec succès");
    } else {
        return redirect("/admin")->with("error", "Aucun fichier vidéo n'a été téléchargé");
    }
}

    public function ajouterMaitreOuvrage(){
        return view("Admin.ajouter_maitre");
    }

    public function storeMaitreOuvrage(Request $request){
        $validatedData = $request->validate([ 
            "nom" => "required|string", 
            "logo" => "nullable|mimes:png,jpeg", 
        ]);
        if ($request->hasFile("logo")) {
           $fileName = time().$request->file("logo")->getClientOriginalName() ;
           $path = $request->file("logo")->storeAs("logos" , $fileName , "public");
           $validatedData["logo"] = $path ;
        }
        MaitreOuvrage::create($validatedData);
        return redirect()->back();
    }

}

