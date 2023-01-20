<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
    
    @yield('title')
    
    </title>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
   <script src="{{ asset('user/js/checkout.js') }}" defer></script>

    <link href="{{ asset('user/css/custom.css') }}" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    
    
    @include('layouts.include.frontnav')

            <div class="content justify-content-center">

                @yield('content')
                
            </div>
    
     <!-- Scripts -->
    <script src="{{ asset('user/js/bootstrap.bundle.js') }}" defer></script>
    @yield('scripts')

</body>
</html>
