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
</head>
<body>
    <x-navbar/>

    <div class="container mt-5 text-center">
        @auth
            {{-- <div class="alert alert-warning alert-dismissible fade show " style="width: 900px; height: 40px;" role="alert">
                <strong>salam rak m9ayad !</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> --}}
        @endauth

        @guest
            {{-- <div class="alert alert-warning alert-dismissible fade show " style="width: 900px; height: 40px;" role="alert">
                <strong>a ser t9ayed!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> --}}
        @endguest

        <form action="{{ route('detailsProjet') }}" method="get">
    <div class="container row">
        <div class="col">
            <select name="nomprojet" class="form-select focus-border-color mb-3" aria-label="Large select example">
                <option selected value="">Nom du projet</option>
                @foreach ($data as $item)
                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
    <select name="ville" class="form-select focus-border-color mb-3" aria-label="Large select example">
        <option selected value="">Client</option>
        @foreach ($maitresOuvrage as $item)
            <option value="{{ $item->maitreOuvrage }}">{{ $item->maitreOuvrage }}</option>
        @endforeach
    </select>
</div>

        <div class="col">
            <select name="categorie" class="form-select focus-border-color mb-3" aria-label="Large select example">
                <option selected value="">Catégorie</option>
                @foreach ($categories as $it)
                    <option value="{{ $it->id }}">{{ $it->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="col">
            <input type="submit" class="btn btn-light border" value="Rechercher" formtarget="_blank">
        </div>
    </div>
</form>

    </div>

    <div class="intro">
        <h1 class="text-center projetBigTitle mt-5 mb-3">Liste des projects réalisés</h1>
        <p class="text-center mt-2 mb-5">Voici une sélection de nos projets achevés par COPREF</p>
    </div>

    <div class="container w-100">
        <div class="row row-cols-1 row-cols-md-3 g-1 justify-content-center">
            {{-- ****************affichage**************** --}}
            @if (count($filtred) > 0)
                @foreach ($filtred as $item)
                    <div class="col projectCard mb-2">
                        <div class="card" style="width: 23rem;">
                            <div id="carouselExampleIndicators.{{ $item->id }}" class="carousel slide">
                                <div class="carousel-indicators">
                                    @foreach ($item->photos as $key => $i)
                                        <button type="button"
                                                data-bs-target="#carouselExampleIndicators.{{ $item->id }}"
                                                data-bs-slide-to="{{ $key }}"
                                                class="{{ $key == 0 ? 'active' : 'Slide' }}"
                                                aria-current="true" aria-label="Slide .{{ $key }}">
                                        </button>
                                    @endforeach
                                </div>

                                <div class="carousel-inner">
                                    @foreach ($item->photos as $key => $i)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            <div class="card">
                                                <p class="card-title projectTitle">{{ $item->name }}</p>
                                                <p class="card-text">{{ $item->ville }}</p>
                                                <div class="image-container">
                                                    <img src="{{ asset($i->images) }}" class="d-block w-100 card-img-top" alt="Image">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <style>
                                    .image-container {
                                        height: 300px; /* Ajustez cette valeur selon vos besoins */
                                        overflow: hidden;
                                    }
                                    .icon-right{
                                        float:right;
                                        padding:10px;
                                    }
                                    .image-container img {
                                        width: 100%;
                                        height: 100%;
                                        object-fit: cover;
                                    }
                                    .card-bottom{
                                        clear:both;
                                    }
                                </style>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators.{{ $item->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators.{{ $item->id }}" data-bs-slide="next">
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
</div> <div class="card-bottom">
                                <p maxlength="3" style="font-weight: 600;">{{ $item->Description }}</p>
                                <p maxlength="3" style="font-weight: 600;">Maitre d'ouvrage: {{ $item->maitreOuvrage }}</p>
                                <p maxlength="3" style="font-weight: 600;">Architecte: {{ $item->architecte }}</p>
                                <hr>
                                <a href="/details/{{ $item->id }}" class="btn" target="_blank" @style(["width: 80%;" , "background-color : #f1592a;","color : white"])>Détails</a>
                            </div></div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <div class="footer">
        {{-- <x-footer/>  mabghach ywelii sticky-bottom --}}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
