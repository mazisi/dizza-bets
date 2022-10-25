<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FixtureController extends Controller
{
    public function fixtures()
    {
        // jvBQK8BXWGeFJ84Y4rod7HCIjKO9xr3S26ad6owdw72xQCKIhF1U1U2rDWlV
        $response = Http::get('https://soccer.sportmonks.com/api/v2.0/countries', [
            'api_token' => 'jvBQK8BXWGeFJ84Y4rod7HCIjKO9xr3S26ad6owdw72xQCKIhF1U1U2rDWlV'
        ]);
        // dd($response->json());
        return view('all_fixture');
    }
}
