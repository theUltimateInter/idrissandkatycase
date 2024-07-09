<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Segment de Carte avec Marqueur à une Adresse</title>
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
     <style>
     
      p {
          font-size: 1.2em;
          color: #333;
          background-color: #fff;
          padding: 20px;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          margin-top: 20px;
          text-align: center;
      }
      .gallery {
          display: grid;
          grid-template-columns: repeat(4, 1fr);
          gap: 10px;
          padding: 20px;
      }
      .gallery img {
          width: 100%;
          height: auto;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      .card-img {
          width: 60px; /* Adjust the width to make the images smaller */
          height: 60px; /* Adjust the height to make the images smaller */
          object-fit: contain; /* Ensure the images are properly displayed */
          transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s; /* Add transition for smooth hover effect */
      }
      .card-img:hover {
          transform: scale(1.1); /* Slightly enlarge the image on hover */
          box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); /* Increase the shadow on hover */
          background-color: #e0e0e0; /* Change background color on hover */
      }
      .nos{
    font-weight: 190;
    font-family:Georgia, 'Times New Roman', Times, serif;

  }.contact {
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

  <p class="section-title m-5 nos" @style('color: #f1592a;') >Listes des clients, Maître d'ouvrages, qui nous ont faits confiance :</p>
  <div class="gallery">
      <img class="card-img" src="{{ asset('LogosMO/Addoha.jpg') }}" alt="Client 1">
      <img class="card-img" src="{{ asset('LogosMO/Invest.png') }}" alt="Client 7">
      <img class="card-img" src="{{ asset('LogosMO/JAMAI.png') }}" alt="Client 8">
      <img class="card-img" src="{{ asset('LogosMO/cnss.jpg') }}" alt="Client 6">
      <img class="card-img" src="{{ asset('LogosMO/ADM.png') }}" alt="Client 2">
      <img class="card-img" src="{{ asset('LogosMO/AutoHall.jpg') }}" alt="Client 5">
  </div>
   
  <x-footer/>
  
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
</body>
</html>
