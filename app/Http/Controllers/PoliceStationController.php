<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PoliceStationController extends Controller
{
    public function index(Request $request)
    {
        $lat = $request->input('lat');
        $lng = $request->input('lng');
        $apiKey = env('GOOGLE_MAPS_API_KEY'); // Make sure to set your API key in your .env file

        if ($lat && $lng) {
            $response = Http::get("https://maps.googleapis.com/maps/api/place/nearbysearch/json", [
                'location' => "{$lat},{$lng}",
                'rankby' => 'distance',
                'type' => 'police',
                'key' => $apiKey,
            ]);

            $policeStations = $response->json()['results'];

            // Return a view with the police stations data
            return view('frontend.police_stations.results', compact('policeStations'));
        }

        // Initial page load without coordinates
        return view('frontend.police_stations.find');
    }
}
