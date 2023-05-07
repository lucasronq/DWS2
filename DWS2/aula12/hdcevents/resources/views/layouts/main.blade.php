<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Roboto:wght@100&display=swap" rel="stylesheet">

        <!-- Css Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

         <!-- Css -->
         <link rel ="stylesheet" href="/css/style.css">
         <script src="/js/scripts.js"></script>

     
    </head>
    <body>
        <nav class="navbar navbar-extends-lg-light">
            <div class="collapse navbar-collapase" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/hdcevents_logo.svg" alt="Logo">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-iten">
                        <a href="/" class="navlink">Criar enventos</a>
                    </li>
                    <li class="nav-iten">
                        <a href="/" class="navlink">Eenventos</a>
                    </li>
                    <li class="nav-iten">Entrar</a>
                    </li>
                    <li class="nav-iten">
                        <a href="/" class="navlink">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
       @yield('content')
       <footer>
            <p>HDC Events &copy; 2020</p>
       </footer>
    </body>
</html>
