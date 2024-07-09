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
    
<section></section>
<section></section>
    <section>
    @if (isset($project))
<section>
    <div class="card-head">
        <div>
            {{ $project->name }}
        </div>
        <div>
            <img src="{{ asset('pictures/broche-de-localisation.png') }}" class="logo mx-4" alt='Copref' style="width: 2rem; height: 1.3rem"/>
            {{ $project->ville }}
        </div>
    </div>

    <div id="carouselExampleIndicators.{{ $project->id }}" class="carousel slide" data-bs-ride="carousel">
        
        
        <div class="carousel-inner">
        <video controls class="embed-responsive-item">
                    <source src="{{ $videoUrl }}" type="video/mp4">
                    <!-- Ajoutez ici un message pour les navigateurs qui ne supportent pas la lecture vidéo -->
                    Votre navigateur ne supporte pas la lecture de vidéos.
                </video>

        </div>
        
        
    </div>

    <div class="card-body">
        <p class="card-text">{{ $project->Description }}</p>
        <div class="card-elt">
            <div>
                <p class="card-text"><span class="orange-text">Maitre d'ouvrage:</span> {{ $project->maitreOuvrage }}</p>
            </div>
            <div>
                <p class="card-text"><span class="orange-text">Architecte:</span> {{ $project->architecte }}</p>
            </div>
        </div>
    </div>
</section>
@endif



<x-footer/>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>