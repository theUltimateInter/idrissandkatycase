<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{asset('css/details.css')}}">
    <title>Document</title>
</head>
<body>

<x-navbar/>

<div class=" container block" style="overflow: hidden" >
          <div class="card d-flex flex-row" @style('height: 100vh; ')>
<div class="row row-lg-1" >
          <div class="col" onmouseover="this.style.background=  ''; this.style.borderRadius = '5px' " onmouseout="this.style.background=  'white'; "  >
            <div class="card-img " style="height: 100%; width: 100%; overflow: hidden; ">
              @foreach ($project->photos as $key => $i)
              <img src="{{asset($i->images)}}" class="card-img-left"  width="100%" height="100%"  onmouseover="this.style.opacity= 0.9; this.style.cursor='pointer';  " onmouseout="this.style.opacity= 1">
              @break
              @endforeach
            </div>
              
          </div>  
        
          <div class="col-md-6 p-3 py-5">
            <h1 class="title py-2" @style('color:#e1592a')>{{$project->name}}</h1>
            <h5 class="text py-2"><small class="text-body-secondary">{{$project->categorie->name}}</small></h5>
            <p class="text py-2">Description du projet : <small class="text-body-secondary">{{$project->Description}}</small></p>
            <p class="text py-2">Ville du projet : <small class="text-body-secondary">{{$project->ville}}</small></p>
            <p class="text py-2">Année : <small class="text-body-secondary">{{$project->Année}}</small></p>
            <p class="text py-2">Maître  d'ouvrage du projet : <small class="text-body-secondary">{{$project->maitreOuvrage }}</small></p>
            
          </div>
      </div>
    
    </div>
  </div> 


     <x-footer/>    


</body>
</html>


