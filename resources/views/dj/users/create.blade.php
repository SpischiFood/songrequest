@extends('layouts.app')

@section('title', 'Gebruiker toevoegen')

@section('content')
    <h1>Nieuwe gebruiker toevoegen</h1>

    <form action="{{ route('users.store') }}" method="post">
        @csrf

        <div>
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

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

        <button type="submit">Gebruiker aanmaken</button>   
    </form>


@endsection