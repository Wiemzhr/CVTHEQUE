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

<div class="pagetitle">
  <h1>Autres</h1>
</div><!-- End Page Title -->
<section class="section">
<div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Liste des Curriculum Vitae </h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Lien</th>
                        <th scope="col">Departement</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $cvs)
                      <tr>
                      <th scope="row"><a>{{ $cvs->id }}</a></th>
                        <td><a class="text-primary">{{ $cvs->name }}</a></td>
                        <td><a href="{{asset($cvs->link)}}" target="_blanc"  class="text-primary">{{asset($cvs->link)}}</a></td>
                         <td><a class="text-primary">{{ $cvs->depart }}</a></td>
                         <td>
                           
                          <form action="{{url('cvs/'.$cvs->id)}}" method="post">
                              {{csrf_field()}}
                              {{method_field('delete')}}
                          <a href="{{url('cvs/'.$cvs->id.'/edit')}}" class="btn btn-default">Modifier</a>
                          <button class="btn btn-default" type="submit">Supprimer</button>
                          </form>
                          </td>
                      </tr>           
                      @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div>
    </section>




</main><!-- End #main -->

</x-app-layout>
