<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="../css/styles.css">
        <script src="./js/scripts.js"></script>
    </head>
    <body>
        @yield('content')
    <footer class="footer">

<ul class="socialList">
    <li>
        <a href="https://www.linkedin.com/in/damien-costa/" target="_blank">
            (linkedin)
        </a>
    </li>
    <li>
        <a href="https://github.com/mienblack" target="_blank">
            (github)
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
    </body>
</html>
