<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'helpnow') }}</title>

    <!-- Estilos -->

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fontastic.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,700">
    <link rel="stylesheet" href="{{ asset('css/style.padrao.css')}}" id="theme-stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}">

</head>
<body>
    <div id="app">

     
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
           @include('helpnow.Menu.header')
        </nav>


        <main class="py-4">
            @yield('conteudo')
        </main>
    </div>

    <!-- Scripts -->

    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{ asset('vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('js/charts-home.js')}}"></script>
    <script src="{{ asset('js/front.js')}}"></script>

</body>
</html>
