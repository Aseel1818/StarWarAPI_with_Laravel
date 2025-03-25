<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class SwapiController extends Controller
{
    public function getPeople(Request $request)
    {
        $page = $request->input('page', 1);

        $response = Http::get("https://swapi.dev/api/people/", [
            'page' => $page,
        ]);

        if ($response->successful()) {
            $data = $response->json();
        
            return view('people', [
                'people' => $data['results'], // Extract results
                'nextPage' => $data['next'],
                'prevPage' => $data['previous'],
            ]);
        } else {
            return response()->json(['error' => 'Failed to retreive people data'], 400);
        }
    }



    public function getPlanets(Request $request)
    {
        $page = $request->input('page', 1);

        $response = Http::get("https://swapi.dev/api/planets/", [
            'page' => $page,
        ]);

        if ($response->successful()) {
            $data = $response->json();
        
            return view('planets', [
                'planets' => $data['results'], // Extract results
            ]);
        } else {
            return response()->json(['error' => 'Failed to retrieve planets data'], 400);

        }
    }
}
