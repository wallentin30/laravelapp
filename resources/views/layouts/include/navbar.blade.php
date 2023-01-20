<nav style="display: inline;"class="navbar navbar-expand-md px-0 mx-4" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid">
      
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
        <ul class="navbar-nav ">
          <li class="nav-item d-flex align-items-center">
            <a href="{{ url('/') }}"> Vizualizare site &nbsp;&nbsp;</a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1"></i>Admin
              </a>
              <ul  class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                       {{ __('Deconectare') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>
                
              </ul>
            </li>
          </li>
        </ul>
      </div>
    </div>
</nav>