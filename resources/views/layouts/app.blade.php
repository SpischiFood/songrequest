<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Song Request')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('request.create') }}">Nummer aanvragen</a>
        <a href="{{ route('queue.index') }}">Wachtrij bekijken</a>

        @auth
            <a href="{{ route('dj.index') }}">DJ Dashboard</a>
            <a href="{{ route('users.create') }}">Gebruiker toevoegen</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Uitloggen</button>
            </form>
        @else
            <a href="{{ route('login') }}">Inloggen</a>
        @endauth

    </nav>

    <main>
        @yield('content')
    </main>

</body>
</html>