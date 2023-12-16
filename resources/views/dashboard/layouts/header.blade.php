<header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-primary" href="#">APLIKASI BKK</a>
  <button class="navbar-toggler position-absolute  d-md-none collapsed " type="button" data-bs-toggle="collapse" 
  data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link  {{ Request::is('profiles*','user*','dashboards*','dashboard/dashboards*','profile/profiles*','dashboard/posts*','post*','postadmin*') ? 'active' : '' }} dropdown-toggle" href="\" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>

          <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/profiles"><i class="bi bi-layout-text-sidebar-reverse"></i>
              <span data-feather="user"></span>
              Profile</a>
            </li>
            <li><hr class="dropdown-divider">
            </li>
            <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                <span data-feather="log-out"></span> Logout</button>
            </form>
          </li>
          </ul>
        </li>
        
        @endauth

      </ul>


    </div>

</nav>
</header>
