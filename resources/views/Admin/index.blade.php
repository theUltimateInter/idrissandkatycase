<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body
 {{-- @style(['display : grid','place-items : center']) --}}
 >

<x-navbar/>


    <h2 class="text-center my-5" @style('color: #e1592a')>Interface d'administrateur</h2>



<div class="container">
@if (session()->has("success"))
 <h4 class="alert alert-success" role="alert">
 {{Session::get("success")}}
 </h4>
@endif 
</div>

<br>

<div class="container">
  <a href="/ajouterMaitre" class="btn btn-primary">Ajouter Maitre Ouvrage</a>
<table class="table table-hover mt-3">
  <thead>
    <tr>
      <th scope="col">N° projet</th>
      <th scope="col">Titre</th>
      <th scope="col">Ville</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Année</th>
      <th scope="col">Description</th>
      <th scope="col">Images</th>
      <th scope="col">Video</th>
      <th scope="col">Observation</th>
      <th scope="col">MO</th>
      <th scope="col">Architecte</th>
      <th scope="col">Opérations</th>
      
    </tr>
  </thead>
  <tbody>
    {{-- @dump($data) --}}
     @foreach ($data as $d)

     <tr class="">
       <td>{{$d->NumProjet}}</td>
       <td>{{$d->name}}</td>
       <td>{{$d->ville}}</td>
       <td>{{$d->Categorie->name}}</td>
       <td>{{$d->Année}}</td>
       <td>{{$d->Description}}</td>
       <td> <span class="badge text-bg-secondary"><a @style('color: white; text-decoration: none') href="/admin/{{$d->id}}/modifier">Afficher/Modifier les images</a></span></td>
       <td> <span class="badge text-bg-secondary"><a @style('color: white; text-decoration: none') href="/admin/{{$d->id}}/modifierVideo">Afficher/Modifier le video </a></span></td>
       <td>{{$d->observation}}</td>
       
       <td>{{$d->maitreOuvrage}}</td>
       <td>{{$d->architecte}}</td>
       <td> <span class="badge text-bg-success"><a href="/update/{{$d->id}}" @style('color: white; text-decoration: none')>Modifier</a></span>
        
        <form action="/delete/{{$d->id}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="badge text-bg-danger" style="color: white; text-decoration: none; border: none; background: none;">Supprimer</button>
      </form>
        
      </td>
    </tr>
     @endforeach


  </tbody>
</table>
</div>
{{-- <x-footer/> --}}
</body>
</html>
