@extends('layouts.main')

@section('content')
    <main class="container">
        <article>
            <h2>Our trips idea:</h2>
            @foreach ($trips as $trip)
                <h4 class="title">{{ $trip->title }}</h4>
                <p><strong>Destination:</strong> {{ $trip->city_destination }} - {{ $trip->state }}</p>
                <p><strong>Price: {{ $trip->price }} $</strong></p>
                <p><strong>Description:</strong> {{ $trip->description }}</p>
                <p><strong>info:</strong> {{ $trip->date_departure }} ({{ $trip->duration }} day/s) 
                / {{ $trip->minimum_partecipants }} minimum partecipants</p>
                <p>Available: 
                    @if ($trip->available = 1)
                    <strong class="col-green"> &#10003; </strong>
                    @else
                        <strong class="col-red"> X </strong>
                    @endif
                </p>
                @if (! $loop->last)
                    <hr>
                @endif
            @endforeach
        </article>
    </main>
@endsection
