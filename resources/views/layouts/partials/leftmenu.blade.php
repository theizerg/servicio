<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <div class="text-center">
          <img src="{{asset('images/logo/logo.png')}}" height="100">
        </div>
         <small class="mt-2" style="margin-left: 6em; font-style: bold; "> {{auth()->user()->full_name}} </small>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administración</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="settings"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href=" {{url('/')}} ">
              <span data-feather="home"></span>
              Inicio <span class="sr-only">(current)</span>
            </a>
          </li>
          @can('view_users')
          <li class="nav-item">
            <a class="nav-link" href=" {{url('user')}} ">
              <span data-feather="users"></span>
              Usuarios
            </a>
          </li>
          @endcan
          @can('assign_permissions')
          <li class="nav-item">
             <a class="nav-link" href="{{url('permission')}}">
              <span data-feather="file"></span>
              Permisos
            </a> 
          </li>
          @endcan
          @can('view_logins')
          <li class="nav-item">
            <a class="nav-link" href="{{url('logins')}}">
              <span data-feather="bar-chart-2"></span>
              Logins
            </a>
          </li>
          @endcan
        </ul>
     

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <h7>Consejo Comunal</h7>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span class="fas fa-home"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('reina.index') }} ">
              <span class="fas fa-crown"></span>
              Dios Reina
            </a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="{{ route('comandante.index') }} ">
              <span class="fas fa-user-tie"></span>
              Pasos del comandante
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>