<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Font link --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/AllProjects.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
    <title>Copref</title>
    <style>
        .left {
            float: left;
            width: 50%;
        }
        .icon {
            float: left;
        }
        .left img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
        .description {
            float: left;
        }
        .right {
            float: right;
            width: 50%;
            text-align: right;
        }
        .right img {
            width: 100px; /* Ajuster la largeur selon les besoins */
            height: auto; /* Pour maintenir le ratio */
        }
        header {
            height: 100px; /* Ajuster la hauteur selon les besoins */
            clear: both;
        }
        .carousel-inner {
            width: 60%;
            margin: 0 auto;
            background-color: #fff;

            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative; /* Ajout de position relative pour les contrôles */
        }
        /* Styles pour les boutons "Previous" et "Next" */
       
        .carousel-control-prev,
.carousel-control-next {
    width: 30px; /* Largeur des boutons */
    height: 30px; /* Hauteur des boutons */
    background-color: gray; /* Couleur de fond */
    border-radius: 50%; /* Rendre les boutons circulaires */
    opacity: 0.8; /* Opacité pour un effet visuel */
    transition: opacity 0.3s ease; /* Transition pour le changement d'opacité */
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
    opacity: 1; /* Augmenter l'opacité au survol */
}


.carousel-control-prev {
    left: 22%;; /* Ajuster la position à gauche */
    top:50%;
}

.carousel-control-next {
    right: 22%; /* Ajuster la position à droite */
    top:50%;
}

        .orange-text {
            color: orange;
        }
        .card-body {
            width: 60%;
            margin: 0 auto;
            margin-top: 4px; /* Marge supplémentaire au-dessus */
           display :flex;
           margin-right:15%;
           flex-direction:column;
           gap:2px;
            text-align: center; /* Centrer le contenu */
        }
        .card-head {
            width: 60%;
            margin: 0 auto;
            margin-top: 4px; /* Marge supplémentaire au-dessus */
            display: flex;
            color: black;
            font-weight: bolder;
            font-size: 17px;
            flex-direction: column;
            gap: 2px; /* Centrer le contenu */
        }
        .icon-right{
                                        float:right;padding-top:6px;
                                        margin-right:0;
                                    }
        .logo mx-4 {
            width: 10px; /* Ajuster la taille de l'icône de brochure */
            margin-right: 0px; /* Espacement à droite */
        }
        .btn-details {
            width: 20%; /* Largeur du bouton Détails */
            margin-top: 10px; /* Marge au-dessus du bouton */
            background-color: blue; /* Couleur de fond du bouton */
            float:left;
        }
        .card-elt {
    display: flex;
    float:right;
    flex-direction: column; /* Afficher les éléments en colonne */
    gap: 2px; /* Espacement vertical entre les éléments */
}

.card-elt div {
    /* Ajuster la mise en page de chaque élément */
    text-align: left; /* Alignement à gauche */
}


    </style>
</head>
<body>
<x-navbar/>
@if (count($filtred) > 0)
    @foreach ($filtred as $item)
    
<section></section>
<section></section>
    <section>
    <section>
<div class="card-head">
    <div >
        {{$item->name}}
</div><div>
<img src="{{asset('pictures/broche-de-localisation.png')}}" class="logo mx-4" alt='Copref' style="width : 2rem ; height:1.3rem"/>

    {{$item->ville}}
    
</div>
</div>
    </section>
        <!-- Partie HTML où le carrousel est généré -->
<div id="carouselExampleIndicators.{{$item->id}}" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">

    @foreach ($item->photos as $key => $i)
      <button type="button" data-bs-target="#carouselExampleIndicators.{{$item->id}}" data-bs-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : 'Slide'}}" aria-current="true" aria-label="Slide .{{$key}}">
      </button>
    @endforeach
  </div>
  
  <div class="carousel-inner">
    @foreach ($item->photos as $key => $i)
      <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
        <img src="{{asset($i->images)}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <!-- Contenu du carrousel, par exemple le titre -->
          
        </div>
      </div>
    @endforeach
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators.{{$item->id}}" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators.{{$item->id}}" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="card-body">
                                 <div class="icon-right">  @if (!empty($item->video))
    <!-- Icône de lecture si le champ vidéo n'est pas vide -->
    <a href="{{ route('viewVideo', ['id' => $item->id]) }}" target="_blank">
        <img src="{{ asset('pictures/play-icon.png') }}" alt="Lire la vidéo" style="transform: translate(-50%, -50%); width: 40px; height: 40px;">
    </a>
@endif
</div> 
        <div class="card-body">
            <p class="card-text">{{$item->Description}}</p>
            <div class="card-elt">
    <div>
        <p class="card-text"><span class="orange-text">Maitre d'ouvrage:</span> {{$item->maitreOuvrage}}</p>
    </div>
    <div>
        <p class="card-text"><span class="orange-text">Architecte:</span> {{$item->architecte}}</p>
    </div>
</div>

            
           <!-- <a href="/details/{{$item->id}}" class="btn btn-light btn-details">Détails</a>-->
        </div>
    </section>

    @endforeach
@endif

<x-footer/>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>