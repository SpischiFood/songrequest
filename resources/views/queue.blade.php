@extends('layouts.app')

@section('title', 'Wachtrij')

@section('content')
    <h1>Wachtrij</h1>

    @foreach ($songRequests as $songRequest)

        <div class="card">
            <strong>
                {{ $songRequest->artist }} - {{ $songRequest->song}}
            </strong>{{ $songRequest->created_at->format('H:i') }}
            <p>
                Aangevraagd door:
                {{ $songRequest->name }}
            </p>
        </div>
    @endforeach

    <h1>Geschiedenis</h1>
    
@endsection