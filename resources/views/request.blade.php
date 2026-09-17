@extends('layouts.app')

@section('title', 'Liedje aanvragen')

@section('content')

    <div class="card">
        <h1>Vraag een liedje aan</h1>
        <p>Welk nummer wil jij graag horen? Vul hieronder je aanvraag in.</p>

        {{-- Succesmelding na aanvraag --}}
        @if (session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="/request">
            @csrf
            <div>
                <label for="name">Naam aanvrager (indien leeg anonniem)</label>
                <input type="text" id="name" name="name" maxlength="50" value="{{ old('name') }}">
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="song">Titel</label>
                <input type="text" id="song" name="song" maxlength="50" value="{{ old('song') }}" required>
                @error('song')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="artist">Artiest</label>
                <input type="text" id="artist" name="artist" maxlength="50" value="{{ old('artist') }}" required>
                @error('artist')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Nummer aanvragen</button>
        </form>
    </div>
@endsection