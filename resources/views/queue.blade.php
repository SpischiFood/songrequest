@extends('layouts.app')

@section('title', 'Wachtrij')

@section('content')
    <h1>Wachtrij</h1>

    @forelse ($songRequests as $songRequest)

        <div class="card">
            <strong>
                {{ $songRequest->artist }} - {{ $songRequest->song}}
            </strong>
            <span class="song-time">
                {{ $songRequest->created_at->format('H:i') }}
            </span>
            <p>
                Aangevraagd door:
                {{ $songRequest->name ?: 'Anoniem' }}
            </p>
        </div>

    @empty
        <div class="card">
            <p>Er staan momenteel geen nummers in de wachtrij. Vraag gerust een liedje aan!</p>
            <a href="{{ route('request.create') }}" class="btn">Nummer aanvragen</a>
        </div>
    @endforelse
    
@endsection