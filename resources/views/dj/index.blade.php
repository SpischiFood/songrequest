<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <h1>Dj dashboard</h1>
    <h2>Welkom {{ Auth::user()->name }}</h2>
    <p>Er staan nog {{ $queueCount }} nummers in de wachtrij.</p>
    <a href="/dj/users/create">Gebruiker aanmaken</a>

    @foreach ($pendingRequests as $songRequest)

        <div>
            <strong>
                {{ $songRequest->artist }} - {{ $songRequest->song}}
            </strong>{{ $songRequest->created_at->format('H:i') }}
            <p>
                Aangevraagd door:
                {{ $songRequest->name }}
            </p>
            <form action="/dj/song/{{ $songRequest->id }}/play" method="post">
                @csrf
                <button type="submit">Play</button>
            </form>

            <form action="/dj/song/{{ $songRequest->id }}/reject" method="post">
                @csrf
                <button type="submit">Reject</button>
            </form>

        </div>
    @endforeach

    <form action="{{ route('logout') }}" method="post">
        @csrf

        <button type="submit">Uitloggen</button>
    </form>

</body>
</html>