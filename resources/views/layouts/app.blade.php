<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'webdev solutions') }}</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />
    <link href="{{ asset('user/css/custom.css') }}" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="{{ asset('user/js/bootstrap.bundle.js') }}" defer></script>  
</head>
<body>
    
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
                      <a class="nav-link textx" href="./#about">{{ __('Despre') }}</a>
                  </li>
                    <li class="nav-item">
                      <a class="nav-link textx" href="./#packages">{{ __('Servicii') }}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link textx" href="./#faq">{{ __('FAQ') }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link textx" href="./#contact">{{ __('Contact') }}</a>
              </li>   
                  @else
        
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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


          <main class="py-4">

              @yield('content')
              
          </main>
    </div>
   
</html>
