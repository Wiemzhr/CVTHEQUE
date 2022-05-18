<x-app-layout>
    <x-slot name="header" >
   
    
    <aside id="sidebar" class="sidebar">
<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="{{ route('dashboard') }}">
      <i class="bi bi-grid"></i>
      <span>Tableau de bord</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{url('cvs')}}">
      <i class="bi bi-card-list"></i>
      <span>Liste des CV</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{url('cvs/create')}}">
    <i class="bi bi-file-earmark-plus"></i>

      <span>Ajouter un CV</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Départements</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
     <li>
       
            <x-dropdown-link :href="url('/it')">
              <i class="bi bi-circle"></i> {{ __('IT') }}
            </x-dropdown-link>
     </li>
     <li>
            <x-dropdown-link :href="url('/technique')">
              <i class="bi bi-circle"></i> {{ __('Technique') }}
            </x-dropdown-link>

     </li>
     <li>
            <x-dropdown-link :href="url('/administratif')">
              <i class="bi bi-circle"></i> {{ __('Administratif') }}
            </x-dropdown-link>
     </li>
     <li>
            <x-dropdown-link :href="url('/production')">
              <i class="bi bi-circle"></i> {{ __('Production') }}
            </x-dropdown-link>
     </li>
     <li>
            <x-dropdown-link :href="url('/autres')">
              <i class="bi bi-circle"></i> {{ __('Autres') }}
            </x-dropdown-link>
     </li>        
        </ul>
      </li>
   
  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <x-dropdown-link :href="url('/profile')"  class="nav-link collapsed">

    <i class="bi bi-person"></i>
                                {{ __('Profil') }}
          </x-dropdown-link>
  </li>

  <li class="nav-item">
      <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="nav_link collapsed">
                              <i class="bi bi-box-arrow-right"></i>
                                {{ __('Deconnexion') }}
                            </x-dropdown-link>
                        </form>
  </li>
</ul>

</aside>
    </x-slot>
    <main id="main" class="main xx">
<div >
  gdggdfgdfg
</div>
<!-- 
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <div class="card-title"> </div>

              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/slides-1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/slides-2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/logo.png" class="d-block w-100" alt="...">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <div class="card-title"> </div>

              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/slides-1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/slides-2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/logo.png" class="d-block w-100" alt="...">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div>

            </div>
          </div>


        </div>

        <div class="col-lg-6">

        <div class="card">
            <div class="card-body">
             <div class="card-title"> </div>

              
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/slides-1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/slides-2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/logo.png" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <div class="card-title"> </div>

              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/slides-1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/slides-2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/logo.png" class="d-block w-100" alt="...">
                  </div>
                </div>

         

              </div>

            </div>
          </div>

        </div>
      </div>
    </section> -->

  </main><!-- End #main -->

</x-app-layout>
