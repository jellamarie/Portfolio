<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <nav class="navbar">
        <a href="/">Home</a>
        <a href="/homework">Homework</a>
        <a href="/routes">Routes</a>
        <a href="/layout">Layout</a>
        <a href="/middleware">Middleware</a>
    </nav>
</header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 My Lab Portfolio</p>
    </footer>
</body>
</html>
