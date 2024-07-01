<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="../css/styles.css">
        <script src="./js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="nav navbar navbar-expand-lg navabr-light">
                <div class="collapse navbar-collapse d-flex justify-content-between">
                    <a href="/" class="navar-brand">
                        <img src="/img/event_logo.png" alt="Logo">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Criar Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
    <footer class="footer">

<ul class="socialList">
    <li>
        <a href="https://www.linkedin.com/in/damien-costa/" target="_blank">
            <img src="/img/linkedin-icon.png" alt="Linkedin" class="social-icon">
        </a>
    </li>
    <li>
        <a href="https://github.com/mienblack" target="_blank">
            <img src="/img/github-icon.png" alt="Github" class="social-icon">
        </a>
    </li>
</ul>
<div class="ref">
    <p>Made with 💟 by Damien Costa ✌🏿</p>
    <p>
        <span class="refSpan">HDCEvent</span> &copy; 2024
    </p>
</div>
</footer>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
</html>
