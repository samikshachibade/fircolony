@extends('layouts.frontend')
@section('frontend')
<div>
    <div class="container">
        <h2>Nearby Police Stations</h2>
        @if(!empty($policeStations))
            <ul>
                @foreach($policeStations as $station)
                    <li>{{ $station['name'] }} - {{ $station['vicinity'] }}</li>
                @endforeach
            </ul>
        @else
            <p>No police stations found near your location.</p>
        @endif
    </div>
</div>
@endsection
