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
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
    @if ( !Route::is('login') or !Route::is('register') )
    <header id="admin-header">
        <nav id="main-navigation">
            <ul>
                <li><a href="/">View Website</a></li>
                <li><a href="/admin/properties">All Listings</a></li>
                <li><a href="/admin/properties/create">Add New Listing</a></li>
                <li><a href="">Profile</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    @endif
        <main class="page-content">
            @yield('content')
        </main>
    
</body>
</html>
