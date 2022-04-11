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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @if (Auth::check())
    <div>I am logged in! :D</div>
    @endif
    @if (!Route::is('login'))
    <header id="wh-header-container">
        <nav id="main-navigation">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li class="header-logo"><a href=""><img src="{{ asset('img/waveHouse-logo.svg') }}" alt=""></a></li>
                <li><a href="">Properties</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
    </header>
    @endif
        <main class="page-content">
            @yield('content')
        </main>
    @if (!Route::is('login'))
    <footer>
        <p>
            &copy; {{ date('Y') }} All Rights Reserved | Designed and Devloped with love by Web Crawler Sites
        </p>
    </footer>
    @endif
</body>
</html>
