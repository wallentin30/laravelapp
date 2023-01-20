<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-xl">
      <a class="navbar-brand" href="{{ url('/') }}">webdev solutions</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
              @guest
              <li class="nav-item">
                <a class="nav-link textx" href="{{ url('/') }}">{{ __('Acasă') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link textx" href="#packages">{{ __('Servicii') }}</a>
          </li>
            <li class="nav-item">
              <a class="nav-link textx" href="#about">{{ __('Ce facem ?') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link textx" href="#faq">{{ __('FAQ') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link textx" href="#contact">{{ __('Contact') }}</a>
      </li>
              @if (Route::has('login'))
              
                  <li class="nav-item">
                      <a class="nav-link text-white" href="{{ route('login') }}"> <span class="fas fa-user text"></span> Contul meu</a>
                  </li>
              @endif

          @else
          <li class="nav-item">
            <a class="nav-link textx" href="{{ url('/') }}">{{ __('Acasă') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link textx" href="#packages">{{ __('Servicii') }}</a>
      </li>
        <li class="nav-item">
          <a class="nav-link textx" href="#about">{{ __('Ce facem ?') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link textx" href="#faq">{{ __('FAQ') }}</a>
    </li>
    <li class="nav-item">
      <a class="nav-link textx" href="#contact">{{ __('Contact') }}</a>
  </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Contul meu
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                <li>
                    
                  <p class="dropdown-item">Salut, <b>{{ Auth::user()->name }}</b></p><hr>
              
                </li>
                <li>
                    
                  <a class="dropdown-item" href="{{ url('my-orders') }}">
                      Comenzile mele
                  </a>
              
                </li>
                <li>
                    
                  <a class="dropdown-item" href="{{ url('home') }}">
                      Profil
                  </a>
              
                </li>
                <li>
                    
                  <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                       {{ __('Iesire') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>
                
              </ul>

            </li>
            
          @endguest
         



        </ul>
      </div>
    </div>
  </nav>




  
{{-- 
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li> --}}