<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Segment de Carte avec Marqueur à une Adresse</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="{{asset('css/contact.css')}}">
  {{-- font link --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <!-- Inclure les styles CSS de Leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  
<style> 

.contact {
    padding: 8px 12px;
    background-color: #e1592a;
    border: none;
    outline: none;
    border-radius: 75px;
    height: 40px;
    width: 100px;
    cursor: pointer;align-items:center; justify-content: center;
}

.contact  a{
    color: white; 
    font-weight: 200;
    font-size: 30px; 
    align-items:center; 
    justify-content: center;
    padding-top: -20px;
}
.contact:hover {
    background: #ff4c11;
    box-shadow: #ff8c00 4px 5px 10px;
    a{
        color: white;
    }
}

.navbar-brand {
    margin-left: auto; /* Pushes the brand/logo to the right */
}

.navbar-nav {
    margin: 0 auto; /* Centers the links */
    display: flex;
    justify-content: center;
    align-items: center;
    
}
nav{
    position: sticky;
    top:0;
  
}
.nav-item {  padding:5px;
    text-align: center; /* Centers the text within each link */
    
}
.nav-link {
    width: 120px;/* Centers the text within each link */
  
    
}


.logo{
    height: 60px;
}
</style>
</head>
<body>
  <x-navbar/>

  
     
  
  
  <div class="row justify-content-center contact_container " id="contact" style="background-color: #efefef;">

        <div class="col-md-6 ContactForm">
          <div class="my-4">
            <h1 class="text-center" style="color: #e1592a;  padding-top: 4%;  padding-bottom: 4%; font-family: 'NOTO Serif', sans-serif ">Contact</h1>
            </div>
            <!-- Contact Form -->
          <center>
            <div class="card mt-2 mx-5 mt-3 formCard " style="width: 59%" >
            <div class="card-body" style="width: 95%">
              <form id="contactForm" action="
              {{-- {{ route('contact.send') }} --}}
              " method="POST">
                @csrf
                <div class="mb-3 ">
                  <label for="email" class="form-label">Nom complet</label>
                  <input type="nom" class="form-control  focus-border-color" id="nom" name="nom" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control focus-border-color" id="email" name="email" required>
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Message</label>
                  <textarea class="form-control focus-border-color" id="message" name="message" rows="4" required></textarea>
                </div>
                <center><button type="submit" class="btn btn-light ">Envoyer</button></center>
              </form>
            </div>
          </div></center>
        </div>

        <div class="col-md-6">
                         
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


  {{-- **************MAP CARD****************** --}}
<!-- Div pour contenir la carte -->
<div id="map" ></div>

<!-- Inclure la bibliothèque Leaflet.js -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
  // Initialiser la carte
  var map = L.map('map').setView([34.256, -6.588], 13); // Coordonnées centrées sur Kenitra

  // Ajouter un fond de carte OpenStreetMap
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  // Utiliser un service de géocodage pour convertir l'adresse en coordonnées
  var adresse = "34 Rue Ghandi, Kenitra";
  var url = "https://nominatim.openstreetmap.org/search?format=json&limit=1&q=" + encodeURIComponent(adresse);

  fetch(url)
    .then(response => response.json())
    .then(data => {
      if (data && data.length > 0) {
        var latlng = [parseFloat(data[0].lat), parseFloat(data[0].lon)];

        // Placer un marqueur à l'adresse spécifiée
        L.marker(latlng).addTo(map).bindPopup(adresse).openPopup();

        // Vous pouvez également ajuster la vue pour centrer la carte sur le marqueur
        map.setView(latlng, 13);
      } else {
        console.error("Impossible de trouver les coordonnées pour l'adresse spécifiée.");
      }
    })
    .catch(error => {
      console.error("Une erreur s'est produite lors de la récupération des coordonnées :", error);
    });
</script>
      </div>
    </div>
        </div>  
      </div>


      <x-infos/>
<x-footer/>
  
</body>
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
</html>
