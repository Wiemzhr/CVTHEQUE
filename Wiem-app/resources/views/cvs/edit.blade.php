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

              <main id="main" class="main">
          <section class="section">
            
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter un CV</h5>
            <form action="{{url('cvs/'.$cv->id)}}" method="post" >
                <input type="hidden" name="_method" value="PUT">
            <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" placeholder="{{$cv->name}}" value="{{$cv->name}}">Titre</label>
                  <div class="col-sm-10">
                  @csrf
                    <input type="text" class="form-control" name="name">
                  </div>

                  <button type="submit" class="btn btn-secondary">Modifier</button>
</form>
                </div>
</div>
</div>
</div> 

    </section>



</main><!-- End #main -->

</x-app-layout>
