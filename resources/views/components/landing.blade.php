<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Copref</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .carousel-item img {
          height: 71vh; /* Set the height of the images to 1% of the viewport height */
           /* Maintain aspect ratio */
        }
        
        @media (max-width: 747px) {

            .carousel-item img {
            height: auto;
            width: 100vw;
            }
        }

        
    .flex-column div {
        width: 12%; 
        height: 130px; 
        margin-top: -100px;
        border-radius: 0 8px 8px 0;
        border: none;
        color: white;
        opacity: 0; /* Initially hidden */
    }

    .flex-column div:hover {
        box-shadow: #698cfdce 2px 5px 20px;
        border: solid white 1px;
    }
        .blue{background: #84a0fd;}
    .or{
        background: #e1592a
    }

    /* Define animation */
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

.carousel-title{
    /* text-shadow: -1px 0 rgb(255, 255, 255), 0 1px rgb(255, 255, 255), 1px 0 rgb(255, 255, 255), 0 -1px rgb(255, 255, 255);  */
    text-shadow: -2px -1px 10px rgba(0, 0, 0, 0.795);
    font-family: sans-serif; font-size: 50px;
    color:rgba(255, 255, 255, 0.628);
    font-weight: 700
}

img{
    opacity: 0.9
}
      </style>
</head>
<body>
    <div id="carouselExampleControls" class="carousel slide mb-3" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('pictures/gallery/hobous.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carousel-title ">École traditionelle - ville</h1>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="{{asset('pictures/gallery/piscine.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carousel-title ">Piscine Olympic - ville</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('pictures/avo.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carousel-title">Institut de formation des avocats - ville</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('pictures/gallery/ibnKhaldoun.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carousel-title">Immeuble - ville</h1>
                </div>
            </div>
            <!-- Les trois derniers carousel-items vont ici -->
            <div class="carousel-item">
                <img src="{{asset('pictures/gallery/omni.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carousel-title"> Omni sport - Kénitra</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('pictures/gallery/ifrane.JPG')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carousel-title">Immeuble - Ifrane</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('pictures/gallery/ista.jpeg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carousel-title">Centre de formation des stagiaires - Beni Marehal</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('pictures/gallery/sapt2.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carousel-title">Mosqué sapt - Tanger</h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev " style="margin-left: 6%" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden ">Next</span>
        </button>
    </div>
     
    
    <x-chiffres/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</body>
</html>
