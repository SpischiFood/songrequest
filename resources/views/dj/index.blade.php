@extends('layouts.app')

@section('title', 'DJ Dashboard')

@section('content')

    <h1>DJ dashboard</h1>

    <h2>Welkom {{ Auth::user()->name }}</h2>

    <p>
        Er staan nog {{ $queueCount }} nummers in de wachtrij.
    </p>

    @foreach ($pendingRequests as $songRequest)

        <div class="card dj-song-card">

            <div class="dj-song-info">
                <p>
                    <strong>
                        {{ $songRequest->artist }} -
                        {{ $songRequest->song }}
                    </strong>
                </p>

                <p>
                Aangevraagd door:
                {{ $songRequest->name ?? 'Anoniem' }}
                </p>
            </div>

            <div class="dj-song-actions">

                <form method="POST"
                    action="{{ route('dj.song.play', $songRequest) }}">
                    @csrf

                    <button type="submit" class="dj-play-btn">
                        ▶ Play
                    </button>
                </form>

                <form method="POST"
                    action="{{ route('dj.song.reject', $songRequest) }}">
                    @csrf

                    <button type="submit" class="dj-reject-btn">
                        ✕ Reject
                    </button>
                </form>

            </div>

        </div>

    @endforeach

@endsection