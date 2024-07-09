<link rel="stylesheet" href="{{asset('css/nav.css')}}">
<div class=" sticky-top">


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <!-- Navbar brand (logo) -->
      <img src="{{asset('pictures/logonew.png')}}" class="logo mx-4" alt='Copref' style="width : 11rem ; height:2.3rem"/>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
          aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                  <a class="nav-link active" onmouseover="this.style.color='#e1592a'"
                      onmouseout="this.style.color=''" aria-current="page" href='{{url('/')}}#'>Acceuil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/references') }}"  onmouseover="this.style.color='#e1592a'"
                onmouseout="this.style.color=''">Mot_du_DG</a>
              </li>
              {{-- <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}#features" onmouseover="this.style.color='#e1592a'"
                      onmouseout="this.style.color=''">Features</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}#promises" onmouseover="this.style.color='#e1592a'"
                      onmouseout="this.style.color=''">Promises</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}#references" onmouseover="this.style.color='#e1592a'"
                      onmouseout="this.style.color=''">References</a>
              </li> --}}
              <li class="nav-item">
                  <a class="nav-link" title="nos projets réalisés" href="{{url('/AllProjects')}}" onmouseover="this.style.color='#e1592a'"
                      onmouseout="this.style.color=''">Projets</a>
              </li>
              
              
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/services') }}"  onmouseover="this.style.color='#e1592a'"
                onmouseout="this.style.color=''">Services</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/client') }}"  onmouseover="this.style.color='#e1592a'"
                onmouseout="this.style.color=''">Clients</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}"  onmouseover="this.style.color='#e1592a'"
                onmouseout="this.style.color=''">Contacts</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin') }}"  onmouseover="this.style.color='#e1592a'"
                onmouseout="this.style.color=''">Espace Admin </a>
              </li>
              @endauth
              
          </ul>
          @auth
          <div class="d-flex">
            <form class="d-flex">
                <a href="/ajouter" class="btn btn-secondary mx-2" >Ajouter Projet</a>
                <a href="/ajouterCategorie" class="btn btn-outline-dark mx-2">Ajouter Catégorie</a>
      
                 </form>
              
              <form class="col-6" action="/logout" method="post">
                @csrf
               <button class="btn btn-danger">Déconnexion</button>
            </form>
          </div>
          
        @endauth
          <!-- Contact button -->
          {{-- <div class="nav-item justify-content-center d-flex contact ms-1">
                <a class="nav-link" href="{{url('/')}}#contact">Contact</a>
          </div> --}}
      </div>
  </div>
</nav></div>