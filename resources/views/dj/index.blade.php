@extends('layouts.app')

@section('title', 'DJ Dashboard')

@section('content')

    <h1>DJ dashboard</h1>

    <h2>Welkom {{ Auth::user()->name }}</h2>

    <p>
        Er staan nog {{ $queueCount }} nummers in de wachtrij.
    </p>

    @foreach ($pendingRequests as $songRequest)

        <div>
            <strong>
                {{ $songRequest->artist }} -
                {{ $songRequest->song }}
            </strong>

            {{ $songRequest->created_at->format('H:i') }}

            <p>
                Aangevraagd door:
                {{ $songRequest->name ?? 'Anoniem' }}
            </p>

            <form method="POST"
                  action="{{ route('dj.song.play', $songRequest) }}">
                @csrf
                <button type="submit">Play</button>
            </form>

            <form method="POST"
                  action="{{ route('dj.song.reject', $songRequest) }}">
                @csrf
                <button type="submit">Reject</button>
            </form>
        </div>

    @endforeach

@endsection