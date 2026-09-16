
@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <section class="card">

        <h1>Welkom bij ons DJ-trio!</h1>

        <p>
            Van R&B tot techno, maar vooral
            heel veel meezingers.
        </p>

        <a href="{{ route('request.create') }}"
           class="btn">
            Vraag een nummer aan
        </a>

        <a href="{{ route('queue.index') }}"
           class="btn btn-secondary">
            Bekijk de wachtrij
        </a>

    </section>

    <section class="card">

        <h2>Over ons</h2>

        <p>
            Wij zijn drie DJ's met een passie
            voor muziek en een goed feestje.
        </p>

    </section>

    <section class="card">

        <h2>Boekingen</h2>

        <p>
            Wil je ons boeken voor jouw evenement?
        </p>

        <a href="mailto:bookings.robboco@gmail.com"
           class="btn">
            Contacteer ons
        </a>

    </section>

@endsection