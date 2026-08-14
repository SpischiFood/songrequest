<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wachtrij</title>
</head>
<body>
    <h1>Wachtrij</h1>

    @foreach ($songRequests as $songRequest)

        <div>
            <strong>
                {{ $songRequest->artist }} - {{ $songRequest->song}}
            </strong>{{ $songRequest->created_at->format('H:i') }}
            <p>
                Aangevraagd door:
                {{ $songRequest->name }}
            </p>
        </div>
    @endforeach

    <h1>Geschiedenis</h1>
    
</body>
</html>