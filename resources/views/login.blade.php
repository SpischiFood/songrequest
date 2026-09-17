
@extends('layouts.app')

@section('title', 'DJ Login')

@section('content')

    <div class="card">

        <h1>DJ Login</h1>

        <form method="POST" action="/login">
            @csrf

            @error('login')
                <p class='error-message'>{{ $message }}</p>
            @enderror

            <div>
                <label for="email">E-mailadres</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                >

                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password">Wachtwoord</label>

                <input
                    type="password"
                    id="password"
                    name="password"
                >

                @error('password')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">
                Inloggen
            </button>

        </form>

    </div>

@endsection