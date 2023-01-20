<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href= '{{ asset("admin/css/material-dashboard.css") }}' rel="stylesheet" />
    <link href="{{ asset('user/css/custom.css') }}" rel="stylesheet">
</head>
<body class="g-sidenav-show  bg-gray-100 ">
    
      @include('layouts.include.sidebar')

      <main class="main-content border-radius-lg">

          @include('layouts.include.navbar')

          <div class="content ">
              @yield('content')
          </div>
      
          @include('layouts.include.footer')


      </main>
     <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
     <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
     <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}" defer></script>
     <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}" defer></script>
     <script src="{{ asset('admin/js/material-dashboard.min.js') }}" defer></script>

    @yield('scripts')
 
</body>
</html>
