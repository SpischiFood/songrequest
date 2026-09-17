@extends('layouts.app')

@section('title', 'Bedankt voor je aanvraag')

@section('content')

    <div class="card thank-you-card">
        <div class="thank-you-icon">
            ✓
        </div>
        <h1>Bedankt voor je aanvraag!</h1>

        @if (session('success'))
            <p class="thank-you-message">
                {{ session('success') }}
            </p>
        @endif

        <div>
            <span class="queue-count-number">{{ $queueCount }}</span>
            <p>
                {{ $queueCount === 1 
                    ? 'nummer in de wachtrij.'
                    : 'nummers in de wachtrij.' }}
            </p>
        </div>

        <h2>Jouw nummer, jouw moment!</h2>
        <p>
            Hoor je straks jouw nummer?
            Leg het moment vast, deel het in je story
            en tag @r0bb0c0!
        </p>

        <p>
            Volg ons ook voor meer muziek en feestjes.
        </p>

        <div class="social-links">

            <a href="#"
               class="social-button"
               target="_blank"
               rel="noopener noreferrer">
                Facebook
            </a>

            <a href="#"
               class="social-button"
               target="_blank"
               rel="noopener noreferrer">
                Instagram
            </a>

            <a href="#"
               class="social-button"
               target="_blank"
               rel="noopener noreferrer">
                SoundCloud
            </a>
        </div>

        <a href="{{ route('home') }}" class="btn home-button">Terug naar home</a>
    </div>
@endsection