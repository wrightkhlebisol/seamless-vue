<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7e62766cf7.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    
    <div id="app" class="bg-gray-300 py-12 font-sans z-40 bg-no-repeat bg-right-top" 
    style="
    background-image: url('{{ asset('img/internia-logo-close.png')}}'), url('{{ asset('img/dot3.png')}}'), url('{{ asset('img/dot3.png')}}');
  background-position: right top, left top, left bottom;
  background-repeat: no-repeat, no-repeat, no-repeat; 
    background-size: 750px 750px, 209px 250px, 450px 250px;">
        
            @yield('content')
    </div>
</body>
</html>
