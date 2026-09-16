@extends('layouts.app')

@section('title', 'Liedje aanvragen')

@section('content')
    <h1>Vraag een liedje aan</h1>

    <form method="POST" action="/request">
        @csrf
        <div>
            <label for="name">Naam aanvrager</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="song">Titel</label>
            <input type="text" id="song" name="song" value="{{ old('song') }}">
            @error('song')
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

        

        
        <button type="submit">Aanvragen</button>
    </form>
@endsection