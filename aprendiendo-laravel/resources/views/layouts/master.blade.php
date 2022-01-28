<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Título - @yield('titulo')</title>
    </head>
    <body>
        @section('header')
        <h1>CABECERA DE LA WEB (master)</h1>
        @show
        <hr>
        <div class="container">
            @yield('content')
        </div>
        <hr>
        @section('footer')
        PIE DE PÁGINA DE LA WEB (master)
        @show
    </body>
</html>
    
