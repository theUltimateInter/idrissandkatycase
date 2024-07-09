{{-- <x-navbar/> --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
  <x-navbar/>
     <form action="/store" method="post">
        @csrf
    <div class="container" style="width: 40%; border: 1px solid silver; margin-top: 4%;  padding: 3%">

        <h1 style="color: #E1592f; text-shadow: 2px 2px #e1e1e1; font-size: 30px">Ajouter un nouveau projet</h1><br>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Numéro de projet  : </span>
          <input type="number" class="form-control" placeholder="numéro de projet" name="NumProjet" aria-label="NumProjet" aria-describedby="basic-addon1">
        </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nom : </span>
        <input type="text" class="form-control" placeholder="nom de projet" name="name" aria-label="projectName" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Ville : </span>
        <input type="text" class="form-control" placeholder="ville de projet" name="ville" aria-label="city" aria-describedby="basic-addon1">
      </div>
      
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Description : </span>
        <textarea class="form-control" placeholder="Décrivez les détails de projet" name="Description" aria-label="Description"></textarea>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Année : </span>
        <input type="number" class="form-control" placeholder="année" name="Année" aria-label="Année" aria-describedby="basic-addon1">
      </div>
     
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">MO : </span>
        <input type="text" class="form-control" placeholder="maître d'ouvrage" name="maitreOuvrage" aria-label="maître d'ouvrage" aria-describedby="basic-addon2">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Architecte : </span>
        <input type="text" class="form-control" placeholder="architecte" name="architecte" aria-label="city" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Catégorie : </span>
        <select name="categorie_id" >
          @foreach ($categories as $categorie)
          <option value={{$categorie->id}}>{{$categorie->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Observation : </span>
        <textarea class="form-control" placeholder="observation" name="observation" aria-label="observation"></textarea>
      </div>
      <div class="input-group mb-3">
        <input type="submit" class="form-control btn" placeholder="Ajouter" style="color: white; background-color: #E1592f; margin-top: 4%">
      </div>
    </div>
</form><x-footer/> 
</body>
</html>


