<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Request</title>
</head>
<body>
    <h1>Vraag een liedje aan</h1>

    <form method="POST" action="/request">
        @csrf
        <div>
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="artist">Artiest</label>
            <input type="text" id="artist" name="artist" value="{{ old('artist') }}">
            @error('artist')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="song">Liedje</label>
            <input type="text" id="song" name="song" value="{{ old('song') }}">
            @error('song')
                <p>{{ $message }}</p>
            @enderror
        </div>

        
        <button type="submit">Aanvragen</button>
    </form>
</body>
</html>