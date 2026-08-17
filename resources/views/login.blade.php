<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DJ Login</h1>
    <form method='POST' action="/login">
        @csrf
        @error('login')
            <p>{{ $message }}</p>
        @enderror

        <div>
            <label for="email">E-mailadres</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

         <div>
            <label for="password">Wachtwoord</label>
            <input type="password" id="password" name="password">
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Inloggen</button>


    </form>
</body>
</html>